<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'gambar',
        'harga',
        'stok',
        'deskripsi',
        'tanggal_obat_dibuat',
        'tanggal_obat_expired',
        'category_id'
    ];

    public function category(): HasOne
    {
        return $this->hasOne(Category::class, 'id', 'category_id');
    }

    public function orders()
    {
        return $this->belongsToMany(Order::class, 'order_product')->withPivot('jumlah')->withTimestamps();
    }
}
