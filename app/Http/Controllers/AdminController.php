<?php

namespace App\Http\Controllers;

use App\Models\Discount;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Product;
use App\Models\Recipe;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

use Illuminate\Routing\Controller as BaseController;

class AdminController extends BaseController  // Pastikan mewarisi Controller Laravel
{
    public function __construct()
    {
        $this->middleware('auth');  // Pastikan pengguna sudah login
    }

    public function index()
    {
        if (Auth::user()->role_id !== 1) {  // Cek apakah yang login adalah admin
            return redirect()->route('loginAdmin');
        }

        // Jika admin, tampilkan halaman admin
        $jumlahPesanan = Order::count();
        $jumlahObat = Product::count();
        $jumlahPelanggan = User::where('role_id', 2)->count();
        $jumlahResep = Recipe::count();
        $jumlahVoucher = Discount::count();

        return view('admin.admin', compact('jumlahPesanan', 'jumlahObat', 'jumlahPelanggan', 'jumlahResep', 'jumlahVoucher'));
    }

    public function indexProfile()
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        return view('profile');
    }
}
