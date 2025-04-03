<?php

namespace Database\Factories;

use App\Models\DLC;
use App\Models\Juego;
use Illuminate\Database\Eloquent\Factories\Factory;

class DlcFactory extends Factory
{
    protected $model = DLC::class;
    public function definition(): array
    {
        return [
            'nombre' => $this->faker->words(3, true),
            'precio' => $this->faker->randomFloat(2, 0, 20), 
            'juego_id' => Juego::all()->random()->id,
        ];
    }
}
