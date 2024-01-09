<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Supplier>
 */
class SupplierFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'phone' => fake()->phoneNumber(),
            'address' => fake()->streetAddress(),
            'shopname' => fake()->company(),
            /* 'type' => fake()->randomNumber(1, 5), */
            'photo' => fake()->image(),
            'account_holder' => fake()->randomNumber(5),
            'account_number' => fake()->randomNumber(5),
            'bank_name' => fake()->company(),
        ];
    }
}
