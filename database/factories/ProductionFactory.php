<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Production>
 */
class ProductionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'line_id' => fake()->numberBetween(1, 10),
            'user_id' => fake()->numberBetween(1, 20),
            'name' => fake()->name(),
            'amount' => fake()->numberBetween(5, 10)
        ];
    }
}