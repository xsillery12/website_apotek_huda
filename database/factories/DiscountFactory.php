<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Discount>
 */
class DiscountFactory extends Factory
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
            'jumlah' => fake()->randomElement(['10%', '20%', '30%', '40%']),
            'detail' => fake()->text(500),
            'gambar' => fake()->imageUrl(640, 480, 'people'),
            'tanggal_diskon_dibuat' => fake()->date('Y-m-d'),
            'tanggal_diskon_expired' => fake()->date('Y-m-d'),
            'status' => fake()->randomElement(['Active', 'Expired']),
        ];
    }
}
