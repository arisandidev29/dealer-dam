<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Product::factory()->count(3)->make();

        for ($i=0; $i < 20; $i++) { 
        Product::create([
             "name" => fake()->name(),
            "tahun" => "2029",
            "harga" => fake()->numberBetween(1500000,3000000),
            "deskripsi" => fake()->paragraph(),
            "image" => fake()->imageUrl(640,480,'motorcyle',true)
        ]);
        }
    }
}
