<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class CartController extends Controller
{
    public function showCart()
    {
        $cartItems = session()->get('cart', []);
        $user = Auth::user();

        $total = 0;
        foreach ($cartItems as $item) {
            $total += $item['price'] * $item['quantity'];
        }

        $tax = 2500;
        $discountAmount = 0;
        $voucher = session('voucher_jumlah');

        if ($voucher) {
            if ($voucher === 'Gratis Ongkir') {
                $shippingCost = 0;
            } elseif (Str::endsWith($voucher, '%')) {
                $persen = intval(str_replace('%', '', $voucher));
                $discountAmount = $total * ($persen / 100);
            }
        }

        $grandTotal = max(0, ($total - $discountAmount) + $tax);

        return view('cart', compact(
            'cartItems',
            'total',
            'tax',
            'discountAmount',
            'grandTotal',
            'user',
            'voucher'
        ));
    }

    public function updateQuantity(Request $request, $productId)
    {
        $quantity = $request->input('quantity');
        $cart = session('cart', []);

        if (isset($cart[$productId])) {
            $cart[$productId]['quantity'] = $quantity; // Update kuantitas produk di session
        }

        session(['cart' => $cart]);

        return response()->json(['success' => true]);
    }

    public function showCheckout()
    {
        $cartItems = session()->get('cart', []);

        // Mengambil data user yang sedang login
        $user = Auth::user();

        // Hitung total harga produk
        $total = 0;
        foreach ($cartItems as $item) {
            $total += $item['price'] * $item['quantity'];
        }

        // pajak tetap
        $tax = 2500;

        // Diskon default = 0
        $discountAmount = 0;

        // Cek apakah ada voucher di session
        $voucher = session('voucher_jumlah');

        if ($voucher) {
            if ($voucher === 'Gratis Ongkir') {
                $shippingCost = 0;
            } elseif (Str::endsWith($voucher, '%')) {
                $persen = intval(str_replace('%', '', $voucher));
                $discountAmount = $total * ($persen / 100);
            }
        }

        // Hitung grand total setelah diskon dan pajak
        $grandTotal = ($total - $discountAmount) + $tax;

        // Kirim data ke view
        return view('checkout', compact(
            'cartItems',
            'total',
            'tax',
            'discountAmount',
            'grandTotal',
            'user',
            'voucher'
        ));
    }

    // Menampilkan keranjang
    public function index()
    {
        return view('cart');
    }

    public function addWithQuantity(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer|min:1'
        ]);

        $productId = $request->input('product_id');
        $quantity = $request->input('quantity');
        $product = Product::find($productId);

        $cart = session('cart', []);

        if (!isset($cart[$productId])) {
            $cart[$productId] = [
                'id' => $product->id,
                'name' => $product->name,
                'price' => $product->harga,
                'image' => $product->gambar,
                'quantity' => $quantity,
            ];
        } else {
            $cart[$productId]['quantity'] += $quantity;
        }

        session(['cart' => $cart]);

        $cartCount = array_sum(array_column($cart, 'quantity'));

        if ($request->ajax()) {
            return response()->json([
                'success' => true,
                'cart_count' => $cartCount
            ]);
        }

        return redirect()->route('cart');
    }

    // Menambahkan produk ke keranjang
    public function add(Request $request)
    {
        $productId = $request->input('product_id');
        $product = Product::find($productId);

        if (!$product) {
            return response()->json(['success' => false, 'message' => 'Produk tidak ditemukan']);
        }

        $cart = session('cart', []);

        if (!isset($cart[$productId])) {
            $cart[$productId] = [
                'id' => $product->id,
                'name' => $product->name,
                'price' => $product->harga,
                'image' => $product->gambar,
                'quantity' => 1,
            ];
        } else {
            $cart[$productId]['quantity'] += 1;
        }

        session(['cart' => $cart]);

        return response()->json([
            'success' => true,
            'cart_count' => count($cart)
        ]);
    }

    // Menghapus produk dari keranjang
    public function remove($productId)
    {
        $cart = session('cart', []);

        if (isset($cart[$productId])) {
            unset($cart[$productId]); // Menghapus produk dari keranjang
        }

        session(['cart' => $cart]);

        return redirect()->route('cart')->with('success', 'Produk berhasil dihapus dari keranjang');
    }
}
