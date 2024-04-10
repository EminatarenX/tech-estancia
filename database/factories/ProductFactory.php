<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'image' => $this->faker->uuid().'.jpg',
            'name' => $this->faker->name(),
            'category' => $this->faker->randomElement(['Electronics', 'Robot', 'Home', 'Books', 'Utilities']), // 'Electronics', 'Books', 'Home', 'Movies', 'Music'   
            'description' => $this->faker->sentence(),
            'price' => $this->faker->randomFloat(2, 1, 1000),
            'stock' => $this->faker->randomNumber(2),
        ];
    }
}
