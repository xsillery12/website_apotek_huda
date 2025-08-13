<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable; // Menggunakan Authenticatable sebagai class dasar
use Illuminate\Notifications\Notifiable;

class Pelanggan extends Authenticatable
{
    use HasFactory, Notifiable;

    public $timestamps = false; // Jika Anda tidak menggunakan timestamps pada tabel
    protected $table = 'pelanggan'; // Menunjukkan tabel yang digunakan
    protected $fillable = [
        'nama',
        'username',
        'jenis_kelamin',
        'tgl_lahir',
        'email',
        'nomor_telepon',
        'alamat',
        'password',
    ];

    // Menambahkan kolom hidden agar password tidak terbaca
    protected $hidden = [
        'password', 'remember_token',
    ];

    // Jika Anda ingin menggunakan timestamp, pastikan menambahkan properti 'timestamps' menjadi true
    // protected $timestamps = true; 
}
