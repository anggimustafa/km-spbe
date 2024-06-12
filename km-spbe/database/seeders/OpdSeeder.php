<?php

namespace Database\Seeders;

use App\Models\Opd;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class OpdSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Opd::create([
            'nama_opd' => 'Dinas Pendidikan'
        ]);

        Opd::create([
            'nama_opd' => 'Dinas Kesehatan'
        ]);

        Opd::create([
            'nama_opd' => 'Dinas Sosial'
        ]);

        Opd::create([
            'nama_opd' => 'Dinas Perhubungan'
        ]);

        Opd::create([
            'nama_opd' => 'Dinas Pariwisata'
        ]);

        Opd::create([
            'nama_opd' => 'Dinas Pertanian'
        ]);

        Opd::create([
            'nama_opd' => 'Dinas Komunikasi dan Informatika'
        ]);

        Opd::create([
            'nama_opd' => 'Dinas Kebudayaan'
        ]);
    }
}
