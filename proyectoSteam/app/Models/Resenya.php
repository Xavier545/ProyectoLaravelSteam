<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
Class Resenya extends Model{
    use HasFactory;
    protected $fillable = [
        'id_usuario',
        'juego_id',
        'positivo',
        'comentario',
    ];
    public function usuario() {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function juego() {
        return $this->belongsTo(Juego::class, 'juego_id');
    }
}