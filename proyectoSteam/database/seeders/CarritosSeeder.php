<?php

namespace Database\Seeders;

use App\Models\Carrito;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CarritosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::all();

        foreach ($users as $user) {
            Carrito::create([
                'id_user' => $user->id,
            ]);
        }
    }
}
