<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Product;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Midtrans\Snap;
use Midtrans\Config;
use App\Helpers\GeoHelper;
use App\Models\User;
use App\Models\Discount; // ✅ Tambahkan baris ini
use Illuminate\Support\Str; // ✅ Tambahkan baris ini juga


class OrderController extends Controller
{
    private $apotekLat = -6.102707339348473;
    private $apotekLon = 106.70728884418126;

    public function downloadInvoice(Order $order)
    {
        $pdf = Pdf::loadView('pdf.invoice', compact('order'));
        return $pdf->download('Invoice Pembelian Apotek Huda' . $order->tag . '.pdf');
    }

    public function lihatPesanan($id)
    {
        $order = Order::with(['items.product'])->find($id);

        if (!$order) {
            abort(404, 'Pesanan tidak ditemukan.');
        }

        // Mapping status ke step index
        $statusSteps = [
            'Order Diterima' => 1,
            'Sedang Dikemas' => 2,
            'Sedang Diantar' => 3,
            'Pesanan Selesai' => 4,
            'Pesanan Dibatalkan' => 0, // handled specially
        ];

        $currentStep = $statusSteps[$order->status] ?? 0;

        // Tracking steps (kita pakai created_at & updated_at sementara untuk tanggal)
        $steps = [
            ['label' => 'Order Diterima', 'date' => $order->created_at],
            ['label' => 'Sedang Dikemas', 'date' => $order->updated_at],
            ['label' => 'Sedang Diantar', 'date' => $order->updated_at],
            ['label' => 'Pesanan Selesai', 'date' => $order->status === 'Pesanan Selesai' ? $order->updated_at : null],
        ];

        return view('pesanan', compact('order', 'steps', 'currentStep'));
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders = Order::with('user')->orderBy('id', 'desc')->get();

        return response()->json($orders);
    }

    // public function orderByUser()
    // {
    //     $user = Auth::user();

    //     $orderUser = Order::where('user_id', $user->id)->with('product')->get();

    //     return response()->json($orderUser);
    // }

    public function userOrders()
    {
        $user = Auth::user();

        $orders = \App\Models\Order::with(['items.product'])
            ->where('user_id', $user->id)
            ->latest()
            ->get();

        return response()->json($orders);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */

    public function checkout()
    {
        Config::$serverKey = env('MIDTRANS_SERVER_KEY');
        Config::$isProduction = false;
        Config::$isSanitized = true;
        Config::$is3ds = true;

        $user = User::find(Auth::id());
        $cartItems = session()->get('cart', []);
        if (empty($cartItems)) {
            return redirect('/cart')->with('error', 'Keranjang kosong.');
        }

        // Koordinat Apotek
        $latApotek = -6.200000;
        $lngApotek = 106.816666;

        // Koordinat User (ambil dari DB atau konversi alamat)
        $latUser = $user->latitude;
        $lngUser = $user->longitude;

        if (!$latUser || !$lngUser) {
            $coords = \App\Helpers\GeoHelper::getCoordinates($user->alamat);
            if ($coords) {
                $latUser = $coords['lat'];
                $lngUser = $coords['lon'];
                $user->latitude = $latUser;
                $user->longitude = $lngUser;
                $user->save();
            }
        }

        // Hitung jarak
        $jarak = 0;
        if ($latUser && $lngUser) {
            $jarak = \App\Helpers\GeoHelper::haversineDistance($latApotek, $lngApotek, $latUser, $lngUser);
        }

        // Hitung opsi ongkir
        $tarifDasar = 10000;
        $opsiPengiriman = [
            'reguler' => intval($tarifDasar + ($jarak * 3000)),
            'express' => intval($tarifDasar + ($jarak * 5000)),
            'same_day' => intval($tarifDasar + ($jarak * 8000)),
        ];

        // Total harga produk
        $total = 0;
        $items = [];
        $products = Product::whereIn('id', collect($cartItems)->pluck('id'))->get()->keyBy('id');

        foreach ($cartItems as $item) {
            $product = $products[$item['id']];
            $total += intval($product->harga) * intval($item['quantity']);
            $items[] = [
                'id' => $product->id,
                'price' => intval($product->harga),
                'quantity' => intval($item['quantity']),
                'name' => $product->name,
            ];
        }

        // Set default metode pengiriman
        $shippingMethod = 'reguler';
        $shippingCostAsli = $opsiPengiriman[$shippingMethod];
        $shippingCost = $shippingCostAsli;

        $tax = 2500;
        $discountAmount = 0;

        // Ambil voucher dari session
        $voucher = session('voucher_jumlah');

        if ($voucher) {
            if ($voucher === 'Gratis Ongkir') {
                $shippingCost = 0;
            } elseif (Str::endsWith($voucher, '%')) {
                $persen = intval(str_replace('%', '', $voucher));
                $discountAmount = $total * ($persen / 100);
            }
        }

        // Hitung total akhir
        $grandTotal = ($total - $discountAmount) + $shippingCost + $tax;
        if ($grandTotal < 0) $grandTotal = 0;

        // Persiapan ke Midtrans
        $params = [
            'transaction_details' => [
                'order_id' => uniqid('ORDER-'),
                'gross_amount' => $grandTotal,
            ],
            'customer_details' => [
                'first_name' => $user->name,
                'email' => $user->email,
                'phone' => $user->nomor_telepon,
            ],
            'item_details' => $items,
            'callbacks' => [
                'finish' => route('success'),
            ],
            'finish_redirect_url' => route('success'),
        ];

        // Tambah ongkir dan pajak
        $params['item_details'][] = [
            'id' => 'ONGKIR',
            'price' => $shippingCost,
            'quantity' => 1,
            'name' => 'Biaya Pengiriman',
        ];
        $params['item_details'][] = [
            'id' => 'PAJAK',
            'price' => $tax,
            'quantity' => 1,
            'name' => 'Pajak',
        ];

        // Tambah diskon jika ada
        if ($discountAmount > 0) {
            $params['item_details'][] = [
                'id' => 'DISKON',
                'price' => -intval($discountAmount),
                'quantity' => 1,
                'name' => 'Diskon (' . $voucher . ')',
            ];
        }

        $snapToken = \Midtrans\Snap::getSnapToken($params);

        return view('checkout', compact(
            'snapToken',
            'user',
            'cartItems',
            'grandTotal',
            'opsiPengiriman',
            'shippingCost',
            'shippingCostAsli',
            'tax',
            'jarak',
            'shippingMethod',
            'total',
            'voucher',
            'discountAmount',
        ));
    }

    public function store(Request $request)
    {
        $user = User::find(Auth::id());

        $cartItems = session()->get('cart', []);
        if (empty($cartItems)) {
            return redirect('/cart')->with('error', 'Keranjang kosong.');
        }

        // Lokasi Apotek
        $latApotek = -6.200000;
        $lngApotek = 106.816666;

        // Lokasi User
        $latUser = $user->latitude;
        $lngUser = $user->longitude;

        if (!$latUser || !$lngUser) {
            $coords = \App\Helpers\GeoHelper::getCoordinates($user->alamat);
            if ($coords) {
                $latUser = $coords['lat'];
                $lngUser = $coords['lon'];
                $user->latitude = $latUser;
                $user->longitude = $lngUser;
                $user->save();
            }
        }

        // Hitung jarak
        $jarak = 0;
        if ($latUser && $lngUser) {
            $jarak = \App\Helpers\GeoHelper::haversineDistance($latApotek, $lngApotek, $latUser, $lngUser);
        }

        // Metode pengiriman default
        $shippingMethod = 'reguler';
        $tarifDasar = 10000;
        $shippingCost = intval($tarifDasar + ($jarak * 3000));

        // Hitung total produk
        $totalProduk = 0;
        $totalQty = 0;
        $products = Product::whereIn('id', collect($cartItems)->pluck('id'))->get()->keyBy('id');

        foreach ($cartItems as $item) {
            $product = $products[$item['id']];
            $totalProduk += intval($product->harga) * intval($item['quantity']);
            $totalQty += intval($item['quantity']);
        }

        $tax = 2500;

        // Ambil voucher dari session
        $voucher = session('voucher_jumlah'); // contoh: "10%" atau "Gratis Ongkir"
        $voucherKode = session('voucher_kode'); // contoh: "DISKON10"
        $discountAmount = 0;
        $discountId = null;

        if ($voucher) {
            if ($voucher === 'Gratis Ongkir') {
                $shippingCost = 0;

                $discount = Discount::where('jumlah', 'Gratis Ongkir')
                    ->where('name', 'like', '%Gratis Ongkir%')
                    ->first();
                $discountId = $discount?->id;
            } elseif (Str::endsWith($voucher, '%')) {
                $persen = intval(str_replace('%', '', $voucher));
                $discountAmount = $totalProduk * ($persen / 100);

                $discount = Discount::where('jumlah', $voucher)->first();
                $discountId = $discount?->id;
            }
        }

        // Hitung total akhir
        $grandTotal = ($totalProduk - $discountAmount) + $shippingCost + $tax;
        if ($grandTotal < 0) $grandTotal = 0;

        // Simpan Order
        $order = Order::create([
            'tag' => uniqid('ORD-'),
            'tanggal' => now(),
            'jumlah' => $totalQty,
            'alamat' => $user->alamat,
            'status' => 'Order Diterima',
            'total' => $grandTotal,
            'delivery_cost' => $shippingCost,
            'shipping_method' => $shippingMethod,
            'jarak' => $jarak,
            'discount_id' => $discountId,
            'discount_amount' => $discountAmount, // ⬅️ Tambahkan ini
            'discount_code' => $voucherKode,
            'user_id' => $user->id,
        ]);

        // Simpan item pesanan
        foreach ($cartItems as $item) {
            $product = $products[$item['id']];
            $order->items()->create([
                'product_id' => $product->id,
                'jumlah' => $item['quantity'],
                'harga' => $product->harga,
            ]);
        }

        // Bersihkan session
        session()->forget(['cart', 'voucher_jumlah', 'voucher_kode']);

        return redirect()->route('success')->with('success', 'Pesanan berhasil dibuat!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        // Ambil data pesanan berdasarkan ID, dengan relasi user, produk, dan discount
        $order = Order::with(['user', 'items.product', 'discount'])->find($id);

        if (!$order) {
            return response()->json(['error' => 'Pesanan tidak ditemukan'], 404);
        }

        // Kembalikan data pesanan dalam format JSON
        return response()->json([
            'data' => [
                'id' => $order->id,
                'tag' => $order->tag,
                'tanggal' => $order->tanggal,
                'jumlah' => $order->jumlah,
                'alamat' => $order->alamat,
                'status' => $order->status,
                'total' => $order->total,
                'user' => [
                    'name' => $order->user->name,  // Nama pengguna
                    'profile_image' => $order->user->image,  // Gambar profil pengguna
                ],
                'product' => $order->items->map(function ($item) {
                    return [
                        'name' => $item->product->name,  // Nama produk
                        'harga' => $item->product->harga,  // Harga produk
                        'image' => $item->product->gambar,  // Gambar produk
                    ];
                }),
                'discount' => $order->discount ? $order->discount->jumlah : null,  // Diskon (jika ada)
            ]
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $validated = $request->validate([
            'id' => 'required',
            'status' => 'required',
        ]);

        $order = Order::findOrFail($request->id);

        $orderData = [
            'status' => $validated['status'],
        ];

        // Simpan perubahan
        try {
            // Update produk di database
            $order->update($orderData);

            return response()->json([
                'success' => true,
                'message' => 'Order berhasil diperbarui!'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Terjadi kesalahan saat memperbarui order!'
            ], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        try {
            Order::destroy($request->id);
            return response()->json([
                'success' => true,
                'message' => 'Pesanan berhasil dihapus!'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Terjadi kesalahan saat menghapus pesanan!'
            ], 500);
        }
    }
}
