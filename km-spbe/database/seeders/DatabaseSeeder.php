<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            // CommentSeeder::class,
            // DiscussionSeeder::class,
            // ObjekSeeder::class,
            // LogpostSeeder::class,
            // LoguserSeeder::class,
            // NotifySeeder::class,
            OpdSeeder::class,
            // PostSeeder::class,
            // ThreadSeeder::class,
            // UserSeeder::class,
            CategorySeeder::class
            // Tambahkan seeder lain di sini
        ]);
    }
}
