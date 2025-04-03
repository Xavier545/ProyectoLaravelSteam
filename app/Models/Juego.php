<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
Class Juego extends Model{
    use HasFactory;
    protected $fillable = [
        'nombre',
        'precio',
        'clasificacion_edad',
    ];

    public function tags() {
        return $this->belongsToMany(Tag::class, 'juegos_tags');
    }
    public function dlcs() {
        return $this->hasMany(Dlc::class);
    }
    public function plataformas() {
        return $this->belongsToMany(Plataforma::class, 'juegos_plataformas');
    }
    public function idiomas() {
        return $this->belongsToMany(Idioma::class, 'juegos_idiomas');
    }
    public function carritos() {
        return $this->belongsToMany(Carrito::class, 'carrito_juego');
    }
    public function resenyas() {
        return $this->hasMany(Resenya::class);
    }
    public function usuarios() {
        return $this->belongsToMany(User::class, 'juegos_users');
    }
}