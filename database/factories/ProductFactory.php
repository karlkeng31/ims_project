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
            'name' => fake()->n,
            'slug',
            'code',
            'quantity',
            'quantity_alert',
            'buying_price',
            'selling_price',
            'tax',
            'tax_type',
            'notes',
            'product_image',
            'category_id',
            'unit_id',
            'created_at',
            'updated_at'
        ];
    }
}
