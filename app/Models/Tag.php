<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
Class Tag extends Model{
    protected $fillable = [
        'nombre'
    ];

    public function juegos() {
        return $this->belongsToMany(Juego::class, 'juegos_tags');
    }
}