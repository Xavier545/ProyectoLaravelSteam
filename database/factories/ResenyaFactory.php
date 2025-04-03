<?php

namespace Database\Factories;

use App\Models\Juego;
use App\Models\Resenya;
use App\Models\User;
use DB;
use Illuminate\Database\Eloquent\Factories\Factory;

class ResenyaFactory extends Factory
{
    public function definition(): array
    {
        $juego = Juego::inRandomOrder()->first();

        DB::transaction(function () use ($juego) {
            foreach ($juego->usuarios as $usuario) {
                // Evitar que otra consulta lo seleccione simultáneamente
                $yaTieneResenya = DB::table('resenyas')
                    ->where('user_id', $usuario->id)
                    ->where('juego_id', $juego->id)
                    ->lockForUpdate()
                    ->exists();
        
                if (!$yaTieneResenya) {
                    Resenya::create([
                        'user_id' => $usuario->id,
                        'juego_id' => $juego->id,
                        'positivo' => fake()->boolean(),
                        'comentario' => fake()->text(150),
                    ]);
                }
            }
        });
        return [];
    }
}