<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Discount;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class DiscountController extends Controller
{
    public function applyVoucher(Request $request)
    {
        $kode = $request->voucher;

        $voucher = Discount::where('kode', $kode)
            ->where('status', 'Active')
            ->whereDate('tanggal_diskon_expired', '>=', now())
            ->first();

        if (!$voucher) {
            return back()->with('error', 'Voucher tidak ditemukan atau sudah tidak berlaku.');
        }

        // Simpan ke session
        Session::put('voucher_kode', $voucher->kode);
        Session::put('voucher_jumlah', $voucher->jumlah);

        return back()->with('success', 'Voucher berhasil digunakan!');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $discounts = Discount::orderBy('id', 'desc')->get();

        return response()->json($discounts);
    }

    public function voucherByUser()
    {
        $voucherUser = Discount::where('status', 'active')->get();

        return response()->json($voucherUser);
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
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'jumlah' => 'required',
            'detail' => 'required',
            'gambar' => 'required|image|mimes:jpg,jpeg,png|max:2048',
            'tanggal_diskon_dibuat' => 'required',
            'tanggal_diskon_expired' => 'required',
            'status' => 'required',
        ]);

        $voucherData = [
            'name' => $request->name,
            'jumlah' => $request->jumlah,
            'detail' => $request->detail,
            'tanggal_diskon_dibuat' => $request->tanggal_diskon_dibuat,
            'tanggal_diskon_expired' => $request->tanggal_diskon_expired,
            'status' => $request->status,
        ];


        if ($request->hasFile('gambar')) {

            $image = $request->file('gambar');
            $imageName = time() . '.' . $image->getClientOriginalExtension();

            // Pindahkan file ke folder public/assets/uploaded
            $image->move(public_path('assets/uploaded'), $imageName);
            $voucherData['gambar'] = $imageName;
        }


        try {
            Discount::create($voucherData);
            return response()->json([
                'success' => true,
                'message' => 'Voucher berhasil ditambahkan!'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Terjadi kesalahan: ' . $e->getMessage(), // Tambah ini agar terlihat
            ], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $voucher = Discount::find($id);
        return response()->json([
            "success" => true,
            "data" => $voucher
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
            'name' => 'required',
            'jumlah' => 'required',
            'detail' => 'required',
            'gambar' => 'required|image|mimes:jpg,jpeg,png|max:2048',
            'tanggal_diskon_dibuat' => 'required',
            'tanggal_diskon_expired' => 'required',
            'status' => 'required',
        ]);

        $voucher = Discount::findOrFail($request->id);

        $voucherData = [
            'name' => $validated['name'],
            'jumlah' => $validated['jumlah'],
            'detail' => $validated['detail'],
            'tanggal_diskon_dibuat' => $validated['tanggal_diskon_dibuat'],
            'tanggal_diskon_expired' => $validated['tanggal_diskon_expired'],
            'status' => $validated['status'],
        ];

        if ($request->hasFile('gambar')) {
            // Hapus gambar lama jika ada
            if ($voucher->gambar) {
                $oldImagePath = public_path('assets/uploaded/' . $voucher->gambar);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath); // Menghapus file gambar lama
                }
            }

            // Upload gambar baru
            $image = $request->file('gambar');
            $imageName = time() . '.' . $image->getClientOriginalExtension();

            // Pindahkan file ke folder public/assets/uploaded
            $image->move(public_path('assets/uploaded'), $imageName);
            $voucherData['gambar'] = $imageName; // Update field gambar
        }

        try {
            // Update produk di database
            $voucher->update($voucherData);

            return response()->json([
                'success' => true,
                'message' => 'Voucher berhasil diperbarui!'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Terjadi kesalahan saat memperbarui voucher!'
            ], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        try {
            Discount::destroy($request->id);
            return response()->json([
                'success' => true,
                'message' => 'Voucher berhasil dihapus!'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Terjadi kesalahan saat menghapus voucher!'
            ], 500);
        }
    }
}
