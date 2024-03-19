<?php

namespace Database\Factories;

use App\Models\Shop;
use Illuminate\Database\Eloquent\Factories\Factory;

class ShopFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Shop::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = $this->faker->unique()->company; // Using company names for shops
        return [
            'name' => $name,
            'description' => $this->faker->catchPhrase,
            'slug' => \Illuminate\Support\Str::slug($name),
            // If your shop model has other fields like 'type', you can generate them similarly
            'type' => $this->faker->randomElement(['Solar', 'Electrical']), // Example for the 'type' field
        ];
    }
}
