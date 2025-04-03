<?php
namespace App\Models;

use App\Models\Juego;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
Class Dlc extends Model{
    use HasFactory;
    protected $fillable = [
        'juego_id',
        'nombre',
        'precio',
    ];
    public function juego() {
        return $this->belongsTo(Juego::class);
    }
    public function users() {
        return $this->belongsToMany(User::class, 'users_dlcs');
    }
    public function carritos() {
        return $this->belongsToMany(Carrito::class, 'carritos_dlcs', 'dlc_id', 'carrito_id');
    }
    
}