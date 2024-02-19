<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ReportsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->title(),
            'date' => fake()->date(),
            'facilitator' => fake()->name(),
            'attendees_number' => fake()->numberBetween(1,1000),
            'summary' => fake()->sentence(),
        ];
    }
}
