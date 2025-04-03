<?php

namespace App\Http\Controllers;

use App\Models\Juego;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function tienda() {
        $availableGames = Juego::all();

        if (Auth::check()) {
            $userGames = Auth::user()->juegos;
            $filteredGames = [];
            foreach ($availableGames as $game) {
                $found = false;
                foreach ($userGames as $userGame) {
                    if ($game->id === $userGame->id) {
                        $found = true;
                        break;
                    }
                }
                if (!$found) {
                    $filteredGames[] = $game;
                }
            }
            $availableGames = $filteredGames;
        }
        return view('tienda',['allAccountGames' => $availableGames]);
    }
    public function comprarView($id) {
        $juego = Juego::findOrFail($id);
        return view('panelJuego',['juego'=> $juego]);
    }
    public function carrito() {
        $user = Auth::user();
        $allInCartGames = $user->carrito->juegos;
        $allInCartDlcs = $user->carrito->dlcs;
        $totalPrecio = $allInCartGames->sum('precio') + $allInCartDlcs->sum('precio');
        return view('carrito',['allInCartGames' => $allInCartGames, 'allInCartDlcs'=> $allInCartDlcs, 'totalPrecio' => $totalPrecio]);
    }
    public function admin() {
        return redirect()->action([UsuariosController::class,'index']);
    }
    public function registerView() {
        return view('register');
    }
    public function loginView() {
        return view('login');
    }
    public function biblioteca() {
        $user = Auth::user();
        $allUserGames = $user->juegos;
        $allUserDlcs = $user->dlcs;
        return view('biblioteca', ['allUserGames' => $allUserGames, 'allUserDlcs'=> $allUserDlcs]);
    }
    public function profile() {
        return view('userProfile');
    }
}