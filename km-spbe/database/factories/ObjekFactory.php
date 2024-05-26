<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\File>
 */
class ObjekFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'post_id' => fake()->randomDigit(),
            'kategori' => fake()->randomElement([
                'Pedoman',
                'E-Book',
                'Presentasi',
                'Regulasi',
                'Infografis',
                'Video'
            ]),
            'judul' => fake()->word(),
            'url' => fake()->url()
        ];
    }
}
