<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $categories = [
            ['name' => 'PANELS', 'description' => 'A variety of panels for different energy needs.', 'slug' => 'panels'],
            ['name' => 'BATTERIES', 'description' => 'Durable and long-lasting energy storage solutions.', 'slug' => 'batteries'],
            ['name' => 'INVERTERS', 'description' => 'Convert DC power to AC for household and industrial use.', 'slug' => 'inverters'],
            ['name' => 'TRUNKING AND CONDUITS', 'description' => 'Secure and organize electrical wiring systems.', 'slug' => 'trunking-and-conduits'],
            ['name' => 'DISTRIBUTION BOXES', 'description' => 'Centralize and protect electrical circuits.', 'slug' => 'distribution-boxes'],
            ['name' => 'BATTERY DISCONNECTORS', 'description' => 'Ensure safety by disconnecting batteries when needed.', 'slug' => 'battery-disconnectors'],
            ['name' => 'LIGHTS', 'description' => 'A wide range of lighting solutions for various applications.', 'slug' => 'lights'],
            ['name' => 'CABLES', 'description' => 'High-quality cables for reliable energy transmission.', 'slug' => 'cables'],
            ['name' => 'AUTOMATIC CHANGE OVER SWITCH', 'description' => 'Seamlessly switch power sources with minimal interruption.', 'slug' => 'automatic-change-over-switch'],
            ['name' => 'MOUNTING KIT', 'description' => 'All necessary components for secure mounting of systems.', 'slug' => 'mounting-kit'],
            ['name' => 'BREAKERS', 'description' => 'Protect circuits from overcurrent and short circuits.', 'slug' => 'breakers'],
            ['name' => 'LUGS', 'description' => 'Connect cables securely to devices and other cables.', 'slug' => 'lugs'],
            ['name' => 'BOLTS', 'description' => 'High-strength bolts for secure installations.', 'slug' => 'bolts'],
            ['name' => 'PUMPS AND VSDs', 'description' => 'Efficient water and fluid movement with variable speed drives.', 'slug' => 'pumps-and-vsds'],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
