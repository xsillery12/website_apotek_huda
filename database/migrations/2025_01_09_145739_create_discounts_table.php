<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('discounts', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->enum('jumlah', ['10%', '20%', '30%', '40%']);
            $table->text('detail')->nullable();
            $table->text('gambar');
            $table->date('tanggal_diskon_dibuat');
            $table->date('tanggal_diskon_expired');
            $table->enum('status', ['Active', 'Expired']);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('discounts');
    }
};
