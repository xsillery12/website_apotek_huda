<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class ForgotPasswordController extends Controller
{
    public function showForgotPasswordForm()
    {
        return view('forgot'); // Pastikan file ini berada di `resources/views/forgot.blade.php`
    }

    // Menampilkan halaman reset password
    public function showResetPasswordForm($token)
    {
        // Cek apakah token valid
        $passwordReset = DB::table('password_resets')->where('token', $token)->first();

        if (!$passwordReset) {
            return redirect()->route('login')->withErrors(['token' => 'This reset link has expired or is invalid.']);
        }

        return view('reset', ['token' => $token]);
    }

    public function sendResetLink(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users,email',
        ]);

        $token = Str::random(64);

        // Simpan token ke database
        DB::table('password_resets')->updateOrInsert(
            ['email' => $request->email],
            ['token' => $token, 'created_at' => now()]
        );

        // Buat tautan reset password
        $resetLink = route('reset-password', ['token' => $token]);

        // Kirim email
        Mail::send('reset-password', ['resetLink' => $resetLink], function ($message) use ($request) {
            $message->to($request->email);
            $message->subject('Reset Password Notification');
        });

        // Redirect ke halaman send.blade.php
        return redirect()->route('forgot-password')->with('success', 'Email reset password telah dikirim! Silahkan cek inbox email kamu');
    }


    public function resetPassword(Request $request)
    {
        // Validasi input
        $request->validate([
            'token' => 'required',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Cari token di database
        $passwordReset = DB::table('password_resets')->where('token', $request->token)->first();

        // Cek apakah token valid dan belum digunakan
        if (!$passwordReset) {
            return back()->withErrors(['token' => 'Invalid or expired token.']);
        }

        // Cari user berdasarkan email
        $user = DB::table('users')->where('email', $passwordReset->email)->first();

        if (!$user) {
            return back()->withErrors(['email' => 'No user found with this email.']);
        }

        // Update password
        DB::table('users')->where('email', $passwordReset->email)->update([
            'password' => Hash::make($request->password),
        ]);

        // Hapus token reset setelah berhasil digunakan
        DB::table('password_resets')->where('email', $passwordReset->email)->delete();

        // Redirect dengan pesan sukses
        return redirect()->route('login')->with('message', 'Password reset successfully. You can now log in with your new password.');
    }
}
