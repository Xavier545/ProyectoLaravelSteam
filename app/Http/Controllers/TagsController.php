<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class TagsController extends Controller
{
    public function index() {
        $allTags = Tag::all();
        return view('gestionTags', ['todosLosTags'=>$allTags]);
    }
    public function store(Request $r) {
        $r->validate([
            'nombre'=> 'string|required|max:250',
        ], [
            'nombre.string' => 'El nombre debe ser un texto valido.',
            'nombre.required' => 'El nombre es obligatorio.',
            'nombre.max' => 'El nombre no puede superar los 250 caracteres.'
        ]);
        
        $tag = new Tag();
        $tag->nombre = $r->input('nombre');
        $tag->save();

        return redirect()->action([TagsController::class, 'index']);
    }
    public function displayEdit($id) {
        $tag = Tag::findOrFail( $id );
        return view('editarTags', ['tag'=>$tag]);
    }
    public function edit(Request $r) {
        $r->validate([
            'nombre'=> 'string|required|max:250',
        ], [
            'nombre.string' => 'El nombre debe ser un texto valido.',
            'nombre.required' => 'El nombre es obligatorio.',
            'nombre.max' => 'El nombre no puede superar los 250 caracteres.'
        ]);
        
        $tag = Tag::findOrFail( $r->input('tag_id') );
        $tag->nombre = $r->input('nombre');
        $tag->save();
        return redirect()->action([TagsController::class, 'index']);
    }
    public function destroy($id) {
        $tag = Tag::findOrFail($id);
        $tag->delete();

        return redirect()->action([TagsController::class, 'index']);
    }
}