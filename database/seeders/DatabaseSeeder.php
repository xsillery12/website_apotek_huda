<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Discount;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use App\Models\Role;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Role::insert([
            [
                'name' => 'Karyawan',
                'description' => 'Role Karyawan'
            ],
            [
                'name' => 'Pelanggan',
                'description' => 'Role Pelanggan'
            ]
        ]);

        Category::insert([
            [
                'name' => 'Sakit Kepala'
            ],
            [
                'name' => 'Sakit Badan'
            ],
            [
                'name' => 'Sakit Kaki'
            ],
        ]);

        User::factory(5)->create();
        Product::factory(5)->create();
        Discount::factory(4)->create();
        Order::factory(5)->create();
    }
}
