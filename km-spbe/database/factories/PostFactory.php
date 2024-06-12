<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => fake()->numberBetween(1,100),
            'category_id' => fake()->numberBetween(1,7),
            'judul' => fake()->word(),
            'slug' => fake()->word(),
            'body' => fake()->text(),
            'is_public' => fake()->boolean(),
            'kasus' => fake()->text(),
            'verified' => fake()->boolean()
        ];
    }
}
