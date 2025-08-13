<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        //
    }

    public function adminLogin(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $user = User::where('email', $request->email)->with('role')->first();

        if ($user && $user->role_id === 1) { // Pastikan role_id admin adalah 1
            if (Auth::attempt($credentials)) {
                // Login berhasil, arahkan ke halaman admin
                return redirect()->route('admin.index');
            }
        }

        // Jika gagal login, kembali ke halaman login admin dengan error
        return back()->with('loginError', 'Login failed! Invalid credentials or not admin.');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $user = User::where('email', $request->email)->with('role')->first();

        if ($user) {
            if (Auth::attempt($credentials)) {
                // Autentikasi berhasil, login user dengan Auth::login
                Auth::login($user); // Login otomatis menggunakan Auth Laravel

                if ($user->role_id === 1) {
                    return redirect()->intended('/admin');
                } elseif ($user->role_id === 2) {
                    return redirect()->intended('/profile');
                }
            }
        }

        return back()->with('loginError', 'Login failed!');
    }

    public function showLoginAdmin()
    {
        return view('admin.login'); // Pastikan ini mengarah ke halaman login admin Anda
    }

    public function logout(Request $request)
    {
        // Cek jika pengguna yang logout adalah admin
        $user = Auth::user();

        // Menghapus sesi pengguna
        $request->session()->invalidate();

        // Regenerasi CSRF token untuk keamanan
        $request->session()->regenerateToken();

        // Jika admin yang logout, arahkan ke halaman login admin
        if ($user && $user->role_id === 1) {  // Misalnya role_id 1 untuk admin
            return redirect()->route('admin.login');  // Arahkan ke login admin
        }

        // Jika user biasa yang logout, arahkan ke halaman login user
        return redirect()->route('login');  // Arahkan ke login biasa
    }

    public function register(Request $request)
    {
        // Validasi inputan
        $registData = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',  // Menambahkan validasi unique untuk email
            'password' => 'required|min:8',  // Misalnya password harus minimal 8 karakter
            'nomor_telepon' => 'required',
            'jenis_kelamin' => 'required',
            'tanggal_lahir' => 'required',
            'role' => 'required',
        ]);

        // Tentukan role_id berdasarkan role
        if ($request->role === 'Karyawan') {
            $registData['role_id'] = 1;
        } elseif ($request->role === 'Customer') {
            $registData['role_id'] = 2;
        }

        try {
            // Membuat user baru di database
            User::create([
                'name' => $registData['name'],
                'email' => $registData['email'],
                'password' => Hash::make($registData['password']),
                'nomor_telepon' => $registData['nomor_telepon'],
                'jenis_kelamin' => $registData['jenis_kelamin'],
                'tanggal_lahir' => $registData['tanggal_lahir'],
                'role_id' => $registData['role_id'],
            ]);

            // Redirect ke halaman login setelah berhasil register
            return redirect('/login')->with('registerSuccess', 'Registration successful! Please login.');
        } catch (\Illuminate\Database\QueryException $e) {
            // Menangkap exception jika terjadi duplikasi email
            if ($e->errorInfo[1] == 1062) {
                return back()->withErrors(['email' => 'Email sudah terdaftar, silakan gunakan email lain.'])->withInput();
            }

            // Menangani error lain
            return back()->withErrors(['error' => 'Terjadi kesalahan, silakan coba lagi.'])->withInput();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id) {}

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
            'email' => 'required',
            'nomor_telepon' => 'required',
            'jenis_kelamin' => 'required',
            'tanggal_lahir' => 'required',
            'alamat' => 'required',
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric',
        ]);

        $user = User::findOrFail($request->id);

        $userData = [
            'name' => $validated['name'],
            'email' => $validated['email'],
            'nomor_telepon' => $validated['nomor_telepon'],
            'jenis_kelamin' => $validated['jenis_kelamin'],
            'tanggal_lahir' => $validated['tanggal_lahir'],
            'alamat' => $validated['alamat'],
            'latitude' => $validated['latitude'],
            'longitude' => $validated['longitude'],
        ];

        if ($request->hasFile('image')) {
            // Hapus image lama jika ada
            if ($user->image) {
                $oldImagePath = public_path('assets/uploaded/' . $user->image);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath); // Menghapus file image lama
                }
            }

            // Upload image baru
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();

            // Pindahkan file ke folder public/assets/uploaded
            $image->move(public_path('assets/uploaded'), $imageName);
            $userData['image'] = $imageName; // Update field image
        }

        try {
            // Update produk di database
            $user->update($userData);
            $userUpdate = User::findOrFail($request->id);

            session(['user' => (object) $userUpdate]);


            return response()->json([
                'success' => true,
                'data' => $userUpdate,
                'message' => 'Profile berhasil diperbarui!'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Terjadi kesalahan saat memperbarui Profile!'
            ], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
