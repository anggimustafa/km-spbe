<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Opd>
 */
class OpdFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama_opd' => fake()->randomElement([
                'Dinas Pendidikan',
                'Dinas Kesehatan',
                'Dinas Sosial',
                'Dinas Perhubungan',
                'Dinas Pariwisata',
                'Dinas Pertanian',
                'Dinas Komunikasi dan Informatika',
                'Dinas Kebudayaan'
            ]),
        ];
    }
}
