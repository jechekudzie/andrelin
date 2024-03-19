<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Product;
use App\Models\Category;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    protected $categoryKeywords = [

        'Panels' => ['Solar Panel', 'Photovoltaic Module', 'Eco-Friendly Panel', 'Energy Panel', 'Sunlight Converter', 'Solar Cell'],
        'Batteries' => ['Lead Acid Battery', 'Lithium Ion Battery', 'Power Storage Cell', 'Deep Cycle Battery', 'Energy Bank', 'Portable Battery'],
        'Inverters' => ['Power Inverter', 'Voltage Converter', 'Energy Inverter', 'Solar Inverter', 'AC to DC Converter', 'Grid-Tie Inverter'],
        'Trunking and Conduits' => ['Electrical Conduit', 'Cable Trunking', 'Wiring Duct', 'PVC Conduit', 'Metal Trunking', 'Flexible Tubing'],
        'Distribution Boxes' => ['Circuit Breaker Box', 'Electrical Junction Box', 'Fuse Box', 'Power Distribution Panel', 'Safety Switch Box', 'Load Center'],
        'Battery Disconnectors' => ['Battery Isolator', 'Power Disconnect Switch', 'Safety Battery Cut-Off', 'Energy Isolator Switch', 'Battery Master Switch', 'Voltage Disconnect'],
        'Lights' => ['LED Bulb', 'Solar Light', 'Energy Saving Lamp', 'Floodlight', 'Street Lamp', 'Emergency Light', 'Industrial Lighting', 'Decorative Light'],
        'Cables' => ['Copper Wire', 'Fiber Optic Cable', 'Coaxial Cable', 'Ethernet Cable', 'USB Cable', 'Power Cord', 'Extension Lead', 'Audio Cable'],
        'Automatic Change Over Switch' => ['Auto Transfer Switch', 'Dual Power Switch', 'Automatic Selector', 'Generator Switch', 'Power Backup Switch', 'Electricity Transfer Unit'],
        'Mounting Kit' => ['Solar Panel Bracket', 'Wall Mount Kit', 'Installation Frame', 'Support Structure', 'Rack Mounting Set', 'Fixture Assembly'],
        'Breakers' => ['Circuit Breaker', 'Safety Switch', 'Fault Interrupter', 'Overload Protector', 'Electric Breaker', 'Surge Protector'],
        'Lugs' => ['Cable Lug', 'Terminal Connector', 'Wire End', 'Crimp Lug', 'Battery Terminal', 'Grounding Lug'],
        'Bolts' => ['Hex Bolt', 'Carriage Bolt', 'Anchor Bolt', 'U-Bolt', 'J-Bolt', 'Eye Bolt', 'Flange Bolt', 'Shoulder Bolt'],
        'Pumps and VSDs' => ['Water Pump', 'Submersible Pump', 'Centrifugal Pump', 'Variable Speed Drive', 'Frequency Inverter', 'Booster Pump', 'Irrigation Pump', 'Sewage Pump'],
    ];

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        // First, select a random category
        $category = Category::inRandomOrder()->first();

        // Get keywords for the selected category, or pick a random category's keywords if not found
        $keywords = $this->categoryKeywords[$category->name] ?? $this->faker->randomElement(array_values($this->categoryKeywords));

        // Directly use a keyword as the product name
        $name = $this->faker->randomElement($keywords);

        return [
            'category_id' => $category->id,
            'name' => $name,
            'image' => $this->faker->imageUrl(),
            'description' => $this->faker->paragraph,
            'customer_price' => $this->faker->numberBetween(100, 1000),
            'dealer_price' => $this->faker->numberBetween(50, 900),
            'on_discount' => $this->faker->boolean,
            'discount_percentage' => $this->faker->optional()->numberBetween(1, 30),
            'published' => $this->faker->boolean,
            'slug' => \Illuminate\Support\Str::slug($name),
        ];
    }
}
