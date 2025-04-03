<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\IdiomasController;
use App\Http\Controllers\JuegosController;
use App\Http\Controllers\PlataformasController;
use App\Http\Controllers\TagsController;
use App\Http\Controllers\UsuariosController;
use App\Http\Middleware\adminAcces;
use App\Http\Middleware\logedAcces;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class,'tienda'])->name('display_tienda');

Route::get('/tienda', [HomeController::class,'tienda'])->name('display_tienda');
Route::get('/tienda/{id}', [HomeController::class,'comprarView'])->name('display_panelJuego');
Route::get('/biblioteca', [HomeController::class,'biblioteca'])->name('display_biblioteca')->middleware(logedAcces::class);
Route::get('/admin', [HomeController::class,'admin'])->name('display_adminPanel')->middleware(adminAcces::class);
Route::get('/profile', [HomeController::class,'profile'])->name('display_profilePanel')->middleware(logedAcces::class);
Route::get('/carrito', [HomeController::class,'carrito'])->name('display_carritoPanel')->middleware(logedAcces::class);

Route::get('/register', [HomeController::class,'registerView'])->name('display_registerPanel');
Route::post('/register', [UsuariosController::class,'register'])->name('register_user');
Route::get('/login', [HomeController::class,'loginView'])->name('display_loginPanel');
Route::post('/login', [UsuariosController::class,'login'])->name('login_user');
Route::get('/cerrar_sesion', [UsuariosController::class,'logout'])->name('log_out_user');

Route::get('/users', [UsuariosController::class, 'index'])->name('usuarios.index')->middleware(adminAcces::class);
Route::post('/user', [UsuariosController::class,'store'])->name('create_user')->middleware(adminAcces::class);
Route::get('/user/{id}', [UsuariosController::class, 'displayEdit'])->name('user.displayEdit')->middleware(adminAcces::class);
Route::post('/user/edit', [UsuariosController::class,'edit'])->name('user.edit')->middleware(adminAcces::class);
Route::delete('/user/{id}', [UsuariosController::class, 'destroy'])->name('user.destroy')->middleware(adminAcces::class);

Route::get('/juegos', [JuegosController::class, 'index'])->name('juegos.index')->middleware(adminAcces::class);
Route::get('/juego/{id}', [JuegosController::class, 'configure'])->name('juego.configure')->middleware(adminAcces::class);
Route::post('/juego', [JuegosController::class,'store'])->name('juego.create')->middleware(adminAcces::class);
Route::post('/juego/edit', [JuegosController::class,'edit'])->name('juego.edit')->middleware(adminAcces::class);

Route::delete('/juego/{id}', [JuegosController::class, 'destroy'])->name('juego.destroy')->middleware(adminAcces::class);
Route::post('/juego/tag', [JuegosController::class,'addTag'])->name('addTag')->middleware(adminAcces::class);
Route::post('/juego/tag/remove', [JuegosController::class,'removeTag'])->name('removeTag')->middleware(adminAcces::class);
Route::post('/juego/idioma', [JuegosController::class,'addIdioma'])->name('addIdioma')->middleware(adminAcces::class);
Route::post('/juego/idioma/remove', [JuegosController::class,'removeIdioma'])->name('removeIdioma')->middleware(adminAcces::class);
Route::post('/juego/plataforma', [JuegosController::class,'addPlataforma'])->name('addPlataforma')->middleware(adminAcces::class);
Route::post('/juego/plataforma/remove', [JuegosController::class,'removePlataforma'])->name('removePlataforma')->middleware(adminAcces::class);
Route::post('/juego/carrito', [JuegosController::class,'anadirJuegoAlCarrito'])->name('anadirJuegoAlCarrito')->middleware(logedAcces::class);
Route::post('/dlc/carrito', [JuegosController::class,'anadirDlcAlCarrito'])->name('anadirDlcAlCarrito')->middleware(logedAcces::class);
Route::delete('/juego/carrito/{id}', [JuegosController::class,'quitarJuegoDelCarrito'])->name('quitarJuegoDelCarrito')->middleware(logedAcces::class);
Route::delete('/dlc/carrito/{id}', [JuegosController::class,'quitarDlcDelCarrito'])->name('quitarDlcDelCarrito')->middleware(logedAcces::class);
Route::get('/comprar', [JuegosController::class,'comprarCarrito'])->name('')->middleware(logedAcces::class);

Route::get('/tags', [TagsController::class, 'index'])->name('tags.index')->middleware(adminAcces::class);
Route::post('/tag', [TagsController::class,'store'])->name('tag.create')->middleware(adminAcces::class);

Route::get('/tag/{id}', [TagsController::class,'displayEdit'])->name('tag.display_edit')->middleware(adminAcces::class);
Route::post('/tag/{id}', [TagsController::class,'edit'])->name('tag.edit')->middleware(adminAcces::class);
Route::delete('/tag/{id}', [TagsController::class, 'destroy'])->name('tag.destroy')->middleware(adminAcces::class);

Route::get('/plataformas', [PlataformasController::class, 'index'])->name('plataformas.index')->middleware(adminAcces::class);
Route::post('/plataforma', [PlataformasController::class,'store'])->name('plataforma.create')->middleware(adminAcces::class);
Route::get('/plataforma/{id}', [PlataformasController::class, 'displayEdit'])->name('plataforma.display_edit')->middleware(adminAcces::class);
Route::post('/plataforma/{id}', [PlataformasController::class, 'edit'])->name('plataforma.edit')->middleware(adminAcces::class);
Route::delete('/plataforma/{id}', [PlataformasController::class, 'destroy'])->name('plataforma.destroy')->middleware(adminAcces::class);

Route::get('/idiomas', [IdiomasController::class, 'index'])->name('idiomas.index')->middleware(adminAcces::class);
Route::post('/idioma', [IdiomasController::class,'store'])->name('idioma.create')->middleware(adminAcces::class);
Route::get('/idioma/{id}', [IdiomasController::class, 'displayEdit'])->name('idioma.display_edit')->middleware(adminAcces::class);
Route::post('/idioma/{id}', [IdiomasController::class, 'edit'])->name('idioma.edit')->middleware(adminAcces::class);
Route::delete('/idioma/{id}', [IdiomasController::class, 'destroy'])->name('idioma.destroy')->middleware(adminAcces::class);