<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarteleraController;
use App\Http\Controllers\BoletoController;
use App\Http\Controllers\CajonController;
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

Route::put('/Carteleras/{cartelera}', [CarteleraController::class, 'update'])->name('Carteleras.update');

Route::resource('Carteleras', CarteleraController::class)
    ->only(['index', 'create', 'store', 'show', 'edit', 'update', 'destroy']);

Route::put('/Boletos/{boleto}', [BoletoController::class, 'update'])->name('Boletos.update');

Route::resource('Boletos', BoletoController::class)
    ->only(['index', 'create', 'store', 'show', 'edit', 'update', 'destroy']);

Route::put('/Cajones/{cajon}', [CajonController::class, 'update'])->name('Cajones.update');

Route::resource('Cajones', CajonController::class)
    ->only(['index', 'create', 'store', 'show', 'edit', 'update', 'destroy']);

Route::resource('Estacionamientos', EstacionamientoController::class)
    ->only(['index', 'create', 'store', 'show', 'edit', 'update', 'destroy']);

Route::put('/Eventos/{evento}', [EventoController::class, 'update'])->name('Eventos.update');

Route::resource('Eventos', EventoController::class)
    ->only(['index', 'create', 'store', 'show', 'edit', 'update', 'destroy']);

Route::put('/Organizadores/{organizador}', [OrganizadorController::class, 'update'])->name('Organizadores.update');

Route::resource('Organizadores', OrganizadorController::class)
    ->only(['index', 'create', 'store', 'show', 'edit', 'update', 'destroy']);

Route::put('/Personas/{persona}', [PersonaController::class, 'update'])->name('Personas.update');

Route::resource('Personas', PersonaController::class)
    ->only(['index', 'create', 'store', 'show', 'edit', 'update', 'destroy']);

Route::put('/Salas/{sala}', [SalaController::class, 'update'])->name('Salas.update');

Route::resource('Salas', SalaController::class)
    ->only(['index', 'create', 'store', 'show', 'edit', 'update', 'destroy']);

Route::put('/Usuarios/{usuario}', [UsuarioController::class, 'update'])->name('Usuarios.update');

Route::resource('Usuarios', UsuarioController::class)
    ->only(['index', 'create', 'store', 'show', 'edit', 'update', 'destroy', 'login']);

Route::post('/Usuarios', [UsuarioController::class, 'store'])->name('Usuarios.store');

Route::get('/Usuarios/login', [UsuarioController::class, 'login'])->name('Usuarios.login');

Route::resource('somos', somosController::class)
    ->only(['index']);

Route::resource('ubicacion', ubicacionController::class)
    ->only(['index']);
