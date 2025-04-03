<?php

namespace App\Http\Controllers;

use App\Models\Carrito;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsuariosController extends Controller
{
    public function index() {
        $allUsers = User::with(['idioma', 'juegos', 'resenyas','carrito','amigos'])->get();
        return view('gestionUsuarios', ['todosLosUsers' => $allUsers]);
    }
    public function register(Request $r) {
        $r->validate([
            'name' => 'required|string|max:250',
            'email' => 'required|email|unique:users|max:250',
            'password' => 'required|string|min:8|confirmed',
        ], [
            'name.required' => 'Nombre Obligatorio.',
            'name.string' => 'El Nombre no es valido.',
            'name.max' => 'El nombre no puede tener más de 250 caracteres.',
            
            'email.required' => 'Correo obligatorio.',
            'email.email' => 'El Correo no es válido.',
            'email.unique' => 'El Correo ya está registrado.',
            'email.max' => 'El Correo no puede tener mas de 250 caracteres.',
            
            'password.required' => 'Contraseña obligatoria.',
            'password.string' => 'La Contraseña no es valida.',
            'password.min' => 'La Contraseña debe tener minimo 8 caracteres.',
            'password.confirmed' => 'Las contraseñas no coinciden.',
        ]);

        $user = new User();
        $user->name = $r->input('name');
        $user->email = $r->input('email');
        $user->password = bcrypt($r->input('password'));
        $user->email_verified_at = now();
        $user->save();

        $carrito = new Carrito();
        $carrito->id_user = $user->id;
        $carrito->save();
        
        Auth::login($user);

        return redirect()->action([HomeController::class,'tienda']);
    }

    public function login(Request $r) {
        $credenciales = $r->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ], [
            'email.required' => 'Ingresa un correo electrónico.',
            'email.email' => 'Correo no válido.',
            'password.required' => 'Ingresa una contraseña.',
        ]);

        if (Auth::attempt($credenciales)) {
            return redirect()->action([HomeController::class,'tienda']);
        }
        $usuario = User::where('email', $r->input('email'))->first();
        if (!$usuario) {
            return redirect()->action([HomeController::class, 'loginView'])
            ->withErrors(['email' => 'El correo electrónico no está registrado.']);
        } else {
            return redirect()->action([HomeController::class, 'loginView'])
            ->withErrors(['password' => 'La contraseña es incorrecta.']);
        }
    }

    public function logout() {
        Auth::logout();
        return redirect()->action([HomeController::class,'tienda']);
    }

    public function store(Request $r) {
        $r->validate([
            'name' => 'required|string|max:250',
            'email' => 'required|email|unique:users|max:250',
            'password' => 'required|string|min:8|confirmed',
        ], [
            'name.required' => 'El nombre es obligatorio.',
            'email.required' => 'El correo electrónico es obligatorio.',
            'email.email' => 'Debes ingresar un correo válido.',
            'email.unique' => 'Este correo ya está registrado.',
            'password.required' => 'La contraseña es obligatoria.',
            'password.min' => 'La contraseña debe tener al menos 8 caracteres.',
            'password.confirmed' => 'Las contraseñas no coinciden.',
        ]);

        $user = new User();
        $user->name = $r->input('name');
        $user->email = $r->input('email');
        $user->password = bcrypt($r->input('password'));
        $user->isAdmin = $r->has('admin') ? 1 : 0;
        $user->email_verified_at = now();
        $user->save();

        $carrito = new Carrito();
        $carrito->id_user = $user->id;
        $carrito->save();
        
        return redirect()->action([UsuariosController::class,'index']);
    }

    public function displayEdit($id) {
        $user = User::find($id);
        return view('editarUsuarios', ['user'=> $user]);
    }
    public function edit(Request $r) {
        $r->validate([
            'name' => 'required|string|max:250',
            'password' => 'required|string|min:8|confirmed',
        ], [
            'name.required' => 'El nombre es obligatorio.',
            'password.required' => 'La contraseña es obligatoria.',
            'password.min' => 'La contraseña debe tener al menos 8 caracteres.',
            'password.confirmed' => 'Las contraseñas no coinciden.',
        ]);

        $user = User::find($r->input('user_id'));
        $user->name = $r->input('name');
        $user->password = bcrypt($r->input('password'));
        $user->isAdmin = $r->has('admin') ? 1 : 0;
        $user->save();

        return redirect()->action([UsuariosController::class,'index']);
    }
    public function destroy($id) {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->action([UsuariosController::class,'index']);
    }
}
