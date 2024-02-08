<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customer>
 */
class CustomerFactory extends Factory
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
            'phone' => fake()->unique()->phoneNumber(),
            'date_of_birth' => fake()->date(),
            'address' => fake()->address(),
            'zip_code' => fake()->randomNumber(4, true),
            'city' => fake()->city(),
            'bank_name' => fake()->randomElement(['BDO', 'Metrobank', 'BPI', 'Landbank', 'PNB', 'DBP', 'RCBC', 'PSBank', 'UCPB', 'AUB']),
        ];
    }
}
