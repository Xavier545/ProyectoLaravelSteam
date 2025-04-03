<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PlataformasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $plataformas = [
            ['nombre' => 'PC'],
            ['nombre' => 'XBOX'],
            ['nombre' => 'PS4 / PS5'],
            ['nombre' => 'Nintendo'],
            ['nombre' => 'VR'],
        ];

        DB::table('plataformas')->insert($plataformas);
    }
}
