<?php

namespace App\Http\Controllers;

use App\Models\Idioma;
use Illuminate\Http\Request;

class IdiomasController extends Controller
{
    public function index() {
        $allLanguages = Idioma::all();
        return view('gestionIdiomas', ['todosLosIdiomas'=>$allLanguages]);
    }
    public function store(Request $r) {
        $r->validate([
            'nombre'=> 'string|required|max:250',
        ], [
            'nombre.string' => 'El nombre debe ser un texto valido.',
            'nombre.required' => 'El nombre es obligatorio.',
            'nombre.max' => 'El nombre no puede superar los 250 caracteres.'
        ]);
        
        $idioma = new Idioma();
        $idioma->nombre = $r->input('nombre');
        $idioma->save();
        return redirect()->action([IdiomasController::class, 'index']);
    }
    public function displayEdit($id) {
        $idioma = Idioma::findOrFail( $id );
        return view('editarIdiomas', ['idioma'=>$idioma]);
    }
    public function edit(Request $r) {
        $r->validate([
            'nombre'=> 'string|required|max:250',
        ], [
            'nombre.string' => 'El nombre debe ser un texto valido.',
            'nombre.required' => 'El nombre es obligatorio.',
            'nombre.max' => 'El nombre no puede superar los 250 caracteres.'
        ]);

        $idioma = Idioma::findOrFail( $r->input('idioma_id') );
        $idioma->nombre = $r->input('nombre');
        $idioma->save();

        return redirect()->action([IdiomasController::class, 'index']);
    }
    public function destroy($id) {
        $idioma = Idioma::findOrFail($id);
        $idioma->delete();
        return redirect()->action([IdiomasController::class, 'index']);
    }
}