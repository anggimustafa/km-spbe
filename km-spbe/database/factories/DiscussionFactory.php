<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Discussion>
 */
class DiscussionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'thread_id' => fake()->randomDigit(),
            'user_id' => fake()->randomDigit(),
            'role' => fake()->randomElement(['admin', 'verifikator', 'author']),
        ];
    }
}
