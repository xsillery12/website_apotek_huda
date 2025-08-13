<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelanggan;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Database\QueryException; // Import untuk menangani exception

class PelangganController extends Controller
{
    // Menampilkan halaman register
    public function create()
    {
        return view('register');
    }

    // Menyimpan data pelanggan ke database
    public function store(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'nama' => 'required|string|max:120',
                'username' => 'required|string|max:20|unique:pelanggan',
                'jenis_kelamin' => 'required|string',
                'tgl_lahir' => 'required|date',
                'email' => 'required|email|unique:pelanggan',  // Validasi duplikasi email
                'nomor_telepon' => 'required|string|max:15|unique:pelanggan', // Validasi duplikasi nomor telepon
                'alamat' => 'required|string',
                'password' => 'required|string|min:8',
            ],
            [
                'email.unique' => 'Email sudah terdaftar, silakan gunakan email lain.',
                'username.unique' => 'Username sudah digunakan, silakan pilih yang lain.',
                'nomor_telepon.unique' => 'Nomor telepon sudah terdaftar, silakan gunakan nomor lain.',
            ]
        );

        // Validasi gagal, kembalikan ke halaman sebelumnya dengan error
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        try {
            // Simpan data pelanggan
            Pelanggan::create([
                'nama' => $request->nama,
                'username' => $request->username,
                'jenis_kelamin' => $request->jenis_kelamin,
                'tgl_lahir' => $request->tgl_lahir,
                'email' => $request->email,
                'nomor_telepon' => $request->nomor_telepon,
                'alamat' => $request->alamat,
                'password' => Hash::make($request->password),
            ]);

            // Redirect setelah berhasil mendaftar
            return redirect()->route('login')->with('success', 'Pendaftaran berhasil! Silakan login.');
        } catch (QueryException $e) {
            // Cek apakah error yang terjadi adalah karena duplikasi email
            if ($e->errorInfo[1] == 1062) { // Error duplikasi entry
                return back()->withErrors(['email' => 'Email sudah terdaftar, silakan gunakan email lain.'])->withInput();
            }

            // Jika ada error lain, tampilkan pesan umum
            return back()->withErrors(['error' => 'Terjadi kesalahan, silakan coba lagi.'])->withInput();
        }
    }
}
