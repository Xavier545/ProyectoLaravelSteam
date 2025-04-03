<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // User::factory(10)->create();
        $this->call(TagsSeeder::class);
        $this->call(IdiomasSeeder::class);
        $this->call(PlataformasSeeder::class);
        $this->call(JuegosSeeder::class);
        $this->call(UsersSeeder::class);
        $this->call(AmigosSeeder::class);
        $this->call(CarritosSeeder::class);
        $this->call(ResenyasSeeder::class);
    }
}