<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Discount extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'discounts';

    protected $fillable = [
        'name',
        'jumlah',
        'detail',
        'gambar',
        'tanggal_diskon_dibuat',
        'tanggal_diskon_expired',
        'status'
    ];

    public function orders(): HasMany
    {
        return $this->hasMany(Order::class, 'discount_id');
    }
}
