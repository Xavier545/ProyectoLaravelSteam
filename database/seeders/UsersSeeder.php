<?php

namespace Database\Seeders;

use App\Models\User;
use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Str;

class UsersSeeder extends Seeder
{
    public function run(): void
    {
        User::factory(10)->create();
        $user = [
            'name' => 'Xavier',
            'email' => 'xavierramosc3@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('Badia123'),
            'id_idioma' => 1,
            'isAdmin' => true,
            'remember_token' => Str::random(60),
            'created_at' => now(),
            'updated_at' => now(),
        ];
        
        DB::table('users')->insert($user);
        
    }
}