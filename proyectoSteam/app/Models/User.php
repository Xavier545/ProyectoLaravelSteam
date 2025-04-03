<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'isAdmin',
        'id_idioma'
    ];

    public function carrito() {
        return $this->hasOne(Carrito::class, 'id_user');
    }
    public function resenyas() {
        return $this->hasMany(Resenya::class);
    }
    public function idioma() {
        return $this->belongsTo(Idioma::class, 'id_idioma');
    }
    public function juegos() {
        return $this->belongsToMany(Juego::class, 'juegos_users');
    }
    public function dlcs() {
        return $this->belongsToMany(Dlc::class, 'users_dlcs');
    }
    public function amigos() {
        return $this->belongsToMany(User::class, 'amigos', 'id_user', 'id_amigo');
    }
    protected $hidden = [
        'password',
        'remember_token',
    ];
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
}
