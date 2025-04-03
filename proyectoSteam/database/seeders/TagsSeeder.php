<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TagsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tags = [
            ['nombre' => 'Plataformas'],
            ['nombre' => '2D'],
            ['nombre' => '3D'],
            ['nombre' => 'Shooter'],
            ['nombre' => 'RPG'],
            ['nombre' => 'Mundo Abierto'],
            ['nombre' => 'Estrategia'],
            ['nombre' => 'Terror'],
            ['nombre' => 'Multijugador'],
            ['nombre' => 'Simulación'],
        ];

        DB::table('tags')->insert($tags);
    }
}