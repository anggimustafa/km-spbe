<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'nama_kategori' => 'Tata Kelola',
            'slug' => 'tata-kelola'
        ]);
        Category::create([
            'nama_kategori' => 'Manajemen',
            'slug' => 'manajemen'
        ]);
        Category::create([
            'nama_kategori' => 'Layanan',
            'slug' => 'layanan'
        ]);
        Category::create([
            'nama_kategori' => 'Infrastruktur',
            'slug' => 'infrastruktur'
        ]);
        Category::create([
            'nama_kategori' => 'Aplikasi',
            'slug' => 'aplikasi'
        ]);
        Category::create([
            'nama_kategori' => 'Keamanan',
            'slug' => 'keamanan'
        ]);
        Category::create([
            'nama_kategori' => 'Audit TIK',
            'slug' => 'audit-tik'
        ]);
    }
}
