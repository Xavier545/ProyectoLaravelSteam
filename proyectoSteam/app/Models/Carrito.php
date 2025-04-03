<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Carrito extends Model{
    use HasFactory;
    protected $fillable = [
        'id_user'
    ];
    public function usuario() {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function juegos() {
        return $this->belongsToMany(Juego::class, 'carritos_juegos')->withPivot('id');
    }
    public function dlcs() {
        return $this->belongsToMany(Dlc::class, 'carritos_dlcs', 'carrito_id', 'dlc_id')->withPivot('id');
    }
    
}