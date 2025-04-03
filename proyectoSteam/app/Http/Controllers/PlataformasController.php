<?php

namespace App\Http\Controllers;

use App\Models\Plataforma;
use Illuminate\Http\Request;

class PlataformasController extends Controller
{
    public function index() {
        $allPlatforms = Plataforma::all();
        return view('gestionPlataformas', ['todasLasPlataformas'=>$allPlatforms]);
    }
    public function store(Request $r) {
        $r->validate([
            'nombre'=> 'string|required|max:250',
        ], [
            'nombre.string' => 'El nombre debe ser un texto valido.',
            'nombre.required' => 'El nombre es obligatorio.',
            'nombre.max' => 'El nombre no puede superar los 250 caracteres.'
        ]);

        $plataforma = new Plataforma();
        $plataforma->nombre = $r->input('nombre');
        $plataforma->save();

        return redirect()->action([PlataformasController::class, 'index']);
    }
    public function displayEdit($id) {
        $plataforma = Plataforma::findOrFail( $id );
        return view('editarPlataformas', ['plataforma'=>$plataforma]);
    }
    public function edit(Request $r) {
        $r->validate([
            'nombre'=> 'string|required|max:250',
        ], [
            'nombre.string' => 'El nombre debe ser un texto valido.',
            'nombre.required' => 'El nombre es obligatorio.',
            'nombre.max' => 'El nombre no puede superar los 250 caracteres.'
        ]);

        $plataforma = Plataforma::findOrFail( $r->input('plataforma_id') );
        $plataforma->nombre = $r->input('nombre');
        $plataforma->save();

        return redirect()->action([PlataformasController::class, 'index']);
    }
    public function destroy($id) {
        $plataforma = Plataforma::findOrFail($id);
        $plataforma->delete();
        return redirect()->action([PlataformasController::class, 'index']);
    }
}