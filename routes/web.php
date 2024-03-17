<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarteleraController;
use App\Http\Controllers\BoletoController;
use App\Http\Controllers\EstacionamientoController;
use App\Http\Controllers\EventoController;
use App\Http\Controllers\OrganizadorController;
use App\Http\Controllers\PersonaController;
use App\Http\Controllers\SalaController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\somosController;
use App\Http\Controllers\ubicacionController;

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
    return view('welcome');
});

Route::resource('Carteleras', CarteleraController::class)
    ->only(['index', 'create', 'store', 'edit', 'update', 'destroy']);

Route::resource('Boletos', BoletoController::class)
    ->only(['index', 'create', 'store', 'edit', 'update', 'destroy']);

Route::resource('Estacionamientos', EstacionamientoController::class)
    ->only(['index', 'create', 'store', 'edit', 'update', 'destroy']);

Route::resource('Eventos', EventoController::class)
    ->only(['index', 'create', 'store', 'edit', 'update', 'destroy']);

Route::resource('Organizadores', OrganizadorController::class)
    ->only(['index', 'create', 'store', 'edit', 'update', 'destroy']);

Route::resource('Personas', PersonaController::class)
    ->only(['index', 'create', 'store', 'edit', 'update', 'destroy']);

Route::resource('Salas', SalaController::class)
    ->only(['index', 'create', 'store', 'edit', 'update', 'destroy']);

Route::resource('Usuarios', UsuarioController::class)
    ->only(['index', 'create', 'store', 'edit', 'update', 'destroy', 'login']);

Route::get('/Usuarios/login', [UsuarioController::class, 'login'])->name('Usuarios.login');

Route::resource('somos', somosController::class)
    ->only(['index']);

Route::resource('ubicacion', ubicacionController::class)
    ->only(['index']);
