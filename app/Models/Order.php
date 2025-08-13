<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'tag',
        'tanggal',
        'jumlah',
        'alamat',
        'status',
        'total',
        'user_id',
        'jarak',
        'delivery_cost',
        'shipping_method',
        'discount_id',
        'discount_amount',   // ⬅️ Tambahkan ini
        'discount_code',     // ⬅️ Dan ini juga
    ];

    public function discount(): HasOne
    {
        return $this->hasOne(Discount::class, 'id', 'discount_id');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function products()
    {
        return $this->belongsToMany(Product::class, 'order_product')->withPivot('jumlah')->withTimestamps();
    }

    public function product()
    {
        return $this->belongsTo(Product::class, 'id', 'product_id');
    }

    public function items()
    {
        return $this->hasMany(\App\Models\OrderItem::class);
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($order) {
            // Format tanggal: YYYYMMDD
            $currentDate = Carbon::now()->format('Ymd');

            // Hitung berapa banyak pesanan yang dibuat hari ini
            $orderCountToday = self::whereDate('created_at', Carbon::today())->count() + 1;

            // Buat tag dengan format #YYYYMMDD-XXX
            $order->tag = '#' . $currentDate . str_pad($orderCountToday, 3, '0', STR_PAD_LEFT);
        });
    }
}
