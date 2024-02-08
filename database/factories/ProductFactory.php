<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
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
            'brand_id' => fake()->randomElement([1, 2, 3, 4, 5]),
            'name' => fake()->words(2, true),
            'slug' => null,
            'sku' => null,
            'image' => fake()->imageUrl(300, 300),
            'description' => fake()->words(10, true),
            'quantity' => fake()->randomNumber(2),
            'price' => fake()->randomElement([10000, 20000, 30000, 40000, 50000]),
            'is_visible' => fake()->boolean(),
            'is_featured' => fake()->boolean(),
            'type' => fake()->randomElement(['deliverable', 'downloadable']),
            'published_at' => now(),
        ];
    }
}
