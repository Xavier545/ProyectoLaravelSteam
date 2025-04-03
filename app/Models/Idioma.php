<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
Class Idioma extends Model{
    protected $fillable = [
        'nombre'
    ];
    public function juegos() {
        return $this->belongsToMany(Juego::class, 'juegos_idiomas');
    }
    public function usuarios() {
        return $this->hasMany(User::class, 'idioma_id');
    }
}