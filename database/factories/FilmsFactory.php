<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Films>
 */
class FilmsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => 1,
            'judul' => fake()->name(),
            'tahun' => fake()->numberBetween(1900,2025),
            'isCompleted' => fake()->boolean(),
        ];
    }
}
