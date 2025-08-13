<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'tag' => null,
            'tanggal' => fake()->date('Y-m-d'),
            'jumlah' => fake()->numberBetween(1, 100),
            'alamat' => fake()->address(),
            'status' => fake()->randomElement(['Shipping', 'Refund', 'Pending', 'Completed']),
            'total' => fake()->randomFloat(2, 1000, 10000),
            'discount_id' => fake()->randomElement([1, 2, 3, 4]),
            'user_id' => fake()->randomElement([1, 2, 3]),
            'product_id' => fake()->randomElement([1, 2, 3]),
        ];
    }
}
