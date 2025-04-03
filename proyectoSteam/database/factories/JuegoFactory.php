<?php

namespace Database\Factories;

use App\Models\DLC;
use App\Models\Idioma;
use App\Models\Juego;
use App\Models\Plataforma;
use App\Models\Tag;

use Illuminate\Database\Eloquent\Factories\Factory;

class JuegoFactory extends Factory
{
    protected $model = Juego::class;
    public function definition(): array
    {
        return [
            'nombre' => $this->faker->word(),
            'precio' => $this->faker->randomFloat(2, 1, 100),
            'clasificacion_edad' => $this->faker->numberBetween(3, 18),
        ];
    }
    public function configure()
    {
        return $this->afterCreating(function (Juego $juego) {
            $tagIds = Tag::inRandomOrder()->limit(rand(2, 4))->pluck('id');
            $juego->tags()->attach($tagIds);

            $plataformaIds = Plataforma::inRandomOrder()->limit(3)->pluck('id');
            $juego->plataformas()->attach($plataformaIds);

            $idiomaIds = Idioma::inRandomOrder()->limit(rand(2, 6))->pluck('id');
            $juego->idiomas()->attach($idiomaIds);

            $dlcCount = rand(0, 2);
            Dlc::factory()->count($dlcCount)->create(['juego_id' => $juego->id]);
        });
    }
}
