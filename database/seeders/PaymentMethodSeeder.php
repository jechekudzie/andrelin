<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PaymentMethodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //payment methods
        $paymentMethods = [
            ['name' => 'Paynow', 'description' => 'Payment made via Online'],
            ['name' => 'Cash', 'description' => 'Payment made in cash or cash on delivery'],
            ['name' => 'Bank Transfer', 'description' => 'Payment made via bank transfer'],
            ['name' => 'POS Swipe', 'description' => 'Payment made via Point of Sale machine'],
            ['name' => 'Ecocash USD', 'description' => 'Payment made via mobile money'],
            ['name' => 'Ecocash ZIG', 'description' => 'Payment made via mobile money'],
            ['name' => 'Zipit USD', 'description' => 'Payment made via Zipit USD'],
            ['name' => 'Zipit ZIG', 'description' => 'Payment made via Zipit ZIG'],
        ];
    }
}
