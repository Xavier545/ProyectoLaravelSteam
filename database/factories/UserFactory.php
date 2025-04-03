<?php

namespace Database\Factories;

use App\Models\Idioma;
use App\Models\Juego;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class UserFactory extends Factory
{
    protected static ?string $password;
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => bcrypt('Badia123'),
            'remember_token' => Str::random(10),
            'id_idioma' => Idioma::inRandomOrder()->first()->id,
            'isAdmin' => false,
        ];
    }
    public function configure()
    {
        return $this->afterCreating(function ($user) {
            $juegos = Juego::inRandomOrder()->limit(rand(2, 6))->get();
            $user->juegos()->attach($juegos);
        });
    }
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}