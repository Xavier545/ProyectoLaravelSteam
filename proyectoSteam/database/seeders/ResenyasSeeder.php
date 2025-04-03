<?php

namespace Database\Seeders;

use App\Models\Resenya;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ResenyasSeeder extends Seeder
{
    public function run(): void
    {
        Resenya::factory()->count(20)->make() // Genera datos sin guardarlos aún
        ->reject(fn($resenya) => empty($resenya['user_id'])) // Filtra los vacíos
        ->each(fn($resenya) => Resenya::create($resenya)); // Inserta los válidos
    }
}
