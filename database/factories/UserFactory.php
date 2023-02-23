<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "name" => $this->faker->firstName(),
            "email" => $this->faker->unique()->safeEmail(),
            "nazwisko" => $this->faker->unique()->lastName(),
            "telefon" => $this->faker->phoneNumber(),
            "password" => Hash::make("Password"),
            "email_verified_at" => now(),
            "remember_token" => Str::random(10)
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * 
     */
}
