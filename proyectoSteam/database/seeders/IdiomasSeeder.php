<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class IdiomasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $idiomas = [
            ['nombre' => 'Espanyol'],
            ['nombre' => 'Ingles'],
            ['nombre' => 'Mandarin'],
            ['nombre' => 'Hindi'],
            ['nombre' => 'Arabe'],
            ['nombre' => 'Frances'],
            ['nombre' => 'Aleman'],
            ['nombre' => 'Portugues'],
            ['nombre' => 'Ruso'],
            ['nombre' => 'Japones']
        ];
        DB::table('idiomas')->insert($idiomas);
    }
}
