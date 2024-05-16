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
            'user_id' => fake()->randomDigit(),
            'judul' => fake()->word(),
            'slug' => fake()->text(),
            'body' => fake()->text(),
            'is_public' => fake()->boolean(),
            'kategori' => fake()->randomElement([
                'Tata Kelola',
                'Manajemen',
                'Layanan',
                'Arsitektur',
                'Keamanan',
                'Aplikasi',
                'Audit TIK'
            ]),
            'kasus' => fake()->text(),
            'verified' => fake()->boolean()
        ];
    }
}
