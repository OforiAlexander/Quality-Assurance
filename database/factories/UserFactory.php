<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
             'first_name' => fake()->firstName(),
             'last_name' => fake()->lastName(),
             'email' => fake()->unique()->safeEmail(),
             'title' => fake()->randomElement(['Academic Deans', 'Dean DLS', 'Dean, Student Affairs', 'Dean Post Grad', 'Dean PAD', 'Dean HR', 'Director Finance', 'Director R&C', 'Director Academic Affairs', 'Director DIMC', 'Director, ISTD', 'Librarian', 'Director, Physical Dev', 'Director, Security', 'Director, Public Affairs', 'Director, CIEC', 'CIEC ACTOR', 'Director of UPSA STRATEGIC PLAN-(2022-2031)', 'Registra', 'Vice Chancelor', 'Pro-VC', 'Head, Media, Website', 'Head FACU', 'Head IA' ,'Head, Procurement Unit Actor']),
             'department_unit' => fake()->text(5),
             'role' => fake()->randomElement(['user', 'admin']),
             'password' => static::$password ??= Hash::make('password'),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
