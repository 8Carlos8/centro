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

Route::resource('Carteleras', BoletoController::class)
    ->only(['index', 'create', 'store', 'edit', 'update', 'destroy']);

Route::resource('Carteleras', EstacionamientoController::class)
    ->only(['index', 'create', 'store', 'edit', 'update', 'destroy']);

Route::resource('Carteleras', EventoController::class)
    ->only(['index', 'create', 'store', 'edit', 'update', 'destroy']);

Route::resource('Carteleras', OrganizadorController::class)
    ->only(['index', 'create', 'store', 'edit', 'update', 'destroy']);

Route::resource('Carteleras', PersonaController::class)
    ->only(['index', 'create', 'store', 'edit', 'update', 'destroy']);

Route::resource('Carteleras', SalaController::class)
    ->only(['index', 'create', 'store', 'edit', 'update', 'destroy']);

Route::resource('Carteleras', UsuarioController::class)
    ->only(['index', 'create', 'store', 'edit', 'update', 'destroy']);
