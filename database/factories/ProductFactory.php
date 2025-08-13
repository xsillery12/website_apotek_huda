<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'gambar' => fake()->imageUrl(640, 480, 'people'),
            'harga' => fake()->randomFloat(2, 1000, 10000),
            'stok' => fake()->numberBetween(0, 100),
            'deskripsi' => fake()->text(500),
            'tanggal_obat_dibuat' => fake()->date('Y-m-d'), 
            'tanggal_obat_expired' => fake()->date('Y-m-d'),            
            'category_id' => fake()->randomElement([1, 2, 3]),
        ];
    }
}
