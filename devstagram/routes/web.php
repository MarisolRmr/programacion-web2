<?php

use App\Http\Controllers\ComentarioController;
use App\Http\Controllers\ImagenController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Ruta para vista página principal
Route::get('/', function () {
    return view('principal');
});

//Ruta para vista registro de usuarios
Route::get('/crear', [RegisterController::class,'index'])->name("register");
//Ruta para enviar datos al servidor
Route::post('/crear', [RegisterController::class,'store']);

//Ruta para mostrar el dashboard del usuario autenticado
//Route::get('/muro', [PostController::class, 'index'])->name('post.index');

//Ruta para login
Route::get('/login', [LoginController::class, 'index'])->name('login');
//Ruta de validación de login
Route::post('/login', [LoginController::class, 'store'])->name('login');

//Ruta de logout
Route::get('/logout',[LogoutController::class, 'store'])->name('logout');

//Username personalizado
Route::get('/{user:username}',[PostController::class, 'index'])->name('posts.index');

//Ruta para formulario de Publicaciones
Route::get('post/create', [PostController::class, 'create'])->name('post.create');

//Ruta para cargar imágenes
Route::post('/imagenes',[ImagenController::class, 'store'])->name('imagenes.store');

//Ruta para almacenar post
Route::post('/posts', [PostController::class, 'store'])->name('posts.store');

Route::get('/{user:username}/posts/{post}', [PostController::class, 'show'])->name('posts.show');
//Route::get('/{user:username}/posts/{post}', [PostController::class, 'show'])->name('posts.show');

Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy');

Route::post('/{user:username}/posts/{post}', [ComentarioController::class, 'store'])->name('comentarios.store');