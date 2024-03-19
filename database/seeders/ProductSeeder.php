<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use App\Models\Shop;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        // Create 200 products
        Product::factory()->count(50)->create()->each(function ($product) {
            // If you want to associate each product with random shops here, you can do so
            // For example, if you want each product to be associated with 1 to 3 shops:
            $shopIds = \App\Models\Shop::inRandomOrder()->take(rand(1, 3))->pluck('id');
            $product->shops()->attach($shopIds);
        });

    }
}
