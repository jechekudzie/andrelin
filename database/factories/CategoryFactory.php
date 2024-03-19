<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Category::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = $this->faker->unique()->words(2, true); // Ensure unique names
        return [
            'name' => $name,
            'description' => $this->faker->sentence,
            'slug' => \Illuminate\Support\Str::slug($name), // Use Laravel's Str class for slugging
        ];
    }
}
