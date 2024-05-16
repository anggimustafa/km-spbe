<?php

namespace Database\Seeders;

use App\Models\Loguser;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LoguserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Loguser::factory(30)->create();
    }
}
