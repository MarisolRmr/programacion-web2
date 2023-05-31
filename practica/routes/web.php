<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductosController;

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

Route::get('/', function () {
    return view('principal');
});



Route::get('/crear', [RegisterController::class, 'index'])->name("register");
Route::post('/crear', [RegisterController::class, 'store']);


Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login',[LoginController::class, 'store']);
Route::get('/logout',[LogoutController::class, 'store'])->name('logout');

Route::get('/home',[PostController::class, 'index'])->name('post.index');
Route::get('/agregar',[PostController::class, 'add']);
Route::get('/productos',[PostController::class, 'see']);


Route::post('/add_productos', [ProductosController::class, 'store_agregar'])->name('agregar_productos');

Route::get('/see_productos', [ProductosController::class, 'store_ver'])->name('productos_registrados');

//Route::get('/delete_productos', [ProductosController::class, 'store_delete'])->name('delete_productos');


Route::delete('/delete_productos/{id}', [ProductosController::class, 'store_delete'])->name('delete_productos');