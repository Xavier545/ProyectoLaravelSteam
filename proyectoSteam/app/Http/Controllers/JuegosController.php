<?php

namespace App\Http\Controllers;

use App\Models\Carrito;
use App\Models\Dlc;
use App\Models\Idioma;
use App\Models\Juego;
use App\Models\Plataforma;
use App\Models\Tag;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JuegosController extends Controller
{
    public function index() { 
        $allGames = Juego::with(['tags', 'idiomas', 'plataformas'])->get();
        return view('gestionJuegos', ['todosLosJuegos' => $allGames]);
    }
    public function store(Request $r) {
        $r->validate([
            'nombre'=> 'string|required|max:250',
            'precio'=> 'numeric|required|gte:0|decimal:0,2',
            'clasificacion_edad'=> 'numeric|required|gte:3|lte:18|decimal:0,0',
        ], [
            'nombre.string' => 'El nombre debe ser un texto.',
            'nombre.required' => 'El nombre es obligatorio.',
            'nombre.max' => 'El nombre no puede superar los 250 caracteres.',
        
            'precio.numeric' => 'El precio debe ser un número.',
            'precio.required' => 'El precio es obligatorio.',
            'precio.gte' => 'El precio no puede ser negativo.',
            'precio.decimal' => 'El precio puede tener hasta 2 decimales como maximo.',
        
            'clasificacion_edad.numeric' => 'La clasificación de edad debe ser un número.',
            'clasificacion_edad.required' => 'La clasificación de edad es obligatoria.',
            'clasificacion_edad.gte' => 'La clasificación de edad debe ser como minimo 3.',
            'clasificacion_edad.lte' => 'La clasificación de edad no puede ser mayor a 18.',
            'clasificacion_edad.decimal' => 'La clasificación de edad debe ser un número entero.'
        ]);
        
        $juego = new Juego();
        $juego->nombre = $r->input('nombre');
        $juego->precio = $r->input('precio');
        $juego->clasificacion_edad = $r->input('clasificacion_edad');
        $juego->save();

        return redirect()->action([JuegosController::class, 'configure'], ['id' => $juego->id]);
    }
    public function configure($id) {
        $juego = Juego::findOrFail($id);
        $everyTag = Tag::all();
        $everyLang = Idioma::all();
        $everyPlatform = Plataforma::all();
        return view('editarJuegos', ['juego'=>$juego, 'everyTag' => $everyTag, 'everyLang' => $everyLang, 'everyPlatform' => $everyPlatform]);
    }
    public function destroy($id) {
        $juego = Juego::findOrFail($id);
        $juego->delete();
        return redirect()->action([JuegosController::class, 'index']);
    }
    public function edit(Request $r) {
        $r->validate([
            'nombre'=> 'string|required|max:250',
            'precio'=> 'numeric|required|gte:0|decimal:0,2',
            'clasificacion_edad'=> 'numeric|required|gte:3|lte:18|decimal:0,0',
        ], [
            'nombre.string' => 'El nombre debe ser un texto.',
            'nombre.required' => 'El nombre es obligatorio.',
            'nombre.max' => 'El nombre no puede superar los 250 caracteres.',
        
            'precio.numeric' => 'El precio debe ser un número.',
            'precio.required' => 'El precio es obligatorio.',
            'precio.gte' => 'El precio no puede ser negativo.',
            'precio.decimal' => 'El precio puede tener hasta 2 decimales como maximo.',
        
            'clasificacion_edad.numeric' => 'La clasificación de edad debe ser un número.',
            'clasificacion_edad.required' => 'La clasificación de edad es obligatoria.',
            'clasificacion_edad.gte' => 'La clasificación de edad debe ser como minimo 3.',
            'clasificacion_edad.lte' => 'La clasificación de edad no puede ser mayor a 18.',
            'clasificacion_edad.decimal' => 'La clasificación de edad debe ser un número entero.'
        ]);
        
        $juego = Juego::findOrFail( $r->input('juego_id'));
        $juego->nombre = $r->input('nombre');
        $juego->precio = $r->input('precio');
        $juego->clasificacion_edad = $r->input('clasificacion_edad');
        $juego->save();
        return redirect()->action([JuegosController::class, 'index']);
    }
    public function anadirJuegoAlCarrito(Request $r) {
        $juego = Juego::findOrFail($r->input('juego_id'));
        $carrito = Auth::user()->carrito;
        $carrito->juegos()->attach($r->input('juego_id'));
        return view('panelJuego',['juego'=> $juego]);
    }
    public function anadirDlcAlCarrito(Request $r) {
        $dlc = Dlc::findOrFail($r->input('dlc_id'));
        $juego = Juego::findOrFail($dlc->juego_id);
        $carrito = Auth::user()->carrito;
        $carrito->dlcs()->attach($r->input('dlc_id'));
        return view('panelJuego',['juego'=> $juego]);
    }
    public function quitarJuegoDelCarrito($id) {
        DB::table('carritos_juegos')->where('id', $id)->delete();
        return redirect()->action([HomeController::class, 'carrito']);
    }
    public function quitarDlcDelCarrito($id) {
        DB::table('carritos_dlcs')->where('id', $id)->delete();
        return redirect()->action([HomeController::class, 'carrito']);
    }
    public function comprarCarrito() {
        $user = Auth::user();
        $carrito = $user->carrito;
        $allInCartGames = $carrito->juegos;
        $allInCartDlcs = $carrito->dlcs;
        foreach ($allInCartGames as $juego) {
            $user->juegos()->attach($juego->id);
            $carrito->juegos()->detach($juego->id);
        }
        foreach ($allInCartDlcs as $dlc) {
            $user->dlcs()->attach($dlc->id);
            $carrito->dlcs()->detach($dlc->id);
        }
        return redirect()->action([HomeController::class, 'biblioteca']);
    }
    // --------------------------------------
    // ---------------- TAGS ----------------
    // --------------------------------------
    public function addTag(Request $r) {
        $r->validate([
            'juego_id' => 'required|exists:juegos,id',
            'tag_id' => 'required|exists:tags,id',
        ]);
    
        $juego = Juego::findOrFail($r->juego_id);
        $juego->tags()->attach($r->tag_id);

        return redirect()->action([JuegosController::class, 'configure'], ['id' => $juego->id]);
    }
    public function removeTag(Request $r) {
        $juego = Juego::findOrFail($r->juego_id);
        $juego->tags()->detach($r->tag_id);

        return redirect()->action([JuegosController::class, 'configure'], ['id' => $juego->id]);
    }
    // -----------------------------------------
    // ---------------- IDIOMAS ----------------
    // -----------------------------------------
    public function addIdioma(Request $r) {
        $r->validate([
            'juego_id' => 'required|exists:juegos,id',
            'idioma_id' => 'required|exists:idiomas,id',
        ]);
    
        $juego = Juego::findOrFail($r->juego_id);
        $juego->idiomas()->attach($r->idioma_id);

        return redirect()->action([JuegosController::class, 'configure'], ['id' => $juego->id]);
    }
    public function removeIdioma(Request $r) {
        $juego = Juego::findOrFail($r->juego_id);
        $juego->idiomas()->detach($r->idioma_id);

        return redirect()->action([JuegosController::class, 'configure'], ['id' => $juego->id]);
    }
    // ---------------------------------------------
    // ---------------- PLATAFORMAS ----------------
    // ---------------------------------------------
    public function addPlataforma(Request $r) {
        $juego = Juego::findOrFail($r->juego_id);
        $juego->plataformas()->attach($r->plataforma_id);

        return redirect()->action([JuegosController::class, 'configure'], ['id' => $juego->id]);
    }
    public function removePlataforma(Request $r) {
        $juego = Juego::findOrFail($r->juego_id);
        $juego->plataformas()->detach($r->plataforma_id);

        return redirect()->action([JuegosController::class, 'configure'], ['id' => $juego->id]);
    }
}