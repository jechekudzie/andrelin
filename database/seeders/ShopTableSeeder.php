<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Shop;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ShopTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $shops = [
            [
                'name' => 'Solar Shop',
                'type' => 'Solar',
                'description' => 'Offering a wide range of solar panels, inverters, and accessories for all your solar energy needs.',
                'slug' => 'solar-shop'
            ],
            [
                'name' => 'Electrical Shop',
                'type' => 'Electrical',
                'description' => 'Your one-stop-shop for electrical supplies, including cables, lighting, and distribution boxes.',
                'slug' => 'electrical-shop'
            ]
        ];

        foreach ($shops as $shop) {
            Shop::create($shop);
        }
    }
}
