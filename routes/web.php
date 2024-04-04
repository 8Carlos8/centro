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
use App\Http\Controllers\AuthController;
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

// Agrupar rutas que requieren autenticación
Route::middleware(['auth'])->group(function () {
    Route::put('/Carteleras/{cartelera}', [CarteleraController::class, 'update'])->name('Carteleras.update');
    Route::resource('Carteleras', CarteleraController::class)->only(['index', 'create', 'store', 'show', 'edit', 'update', 'destroy']);

    Route::put('/Boletos/{boleto}', [BoletoController::class, 'update'])->name('Boletos.update');
    Route::resource('Boletos', BoletoController::class)->only(['index', 'create', 'store', 'show', 'edit', 'update', 'destroy']);

    Route::put('/Cajones/{cajon}', [CajonController::class, 'update'])->name('Cajones.update');
    Route::resource('Cajones', CajonController::class)->only(['index', 'create', 'store', 'show', 'edit', 'update', 'destroy']);

    Route::resource('Estacionamientos', EstacionamientoController::class)->only(['index', 'create', 'store', 'show', 'edit', 'update', 'destroy']);

    Route::put('/Eventos/{evento}', [EventoController::class, 'update'])->name('Eventos.update');
    Route::resource('Eventos', EventoController::class)->only(['index', 'create', 'store', 'show', 'edit', 'update', 'destroy']);

    Route::put('/Organizadores/{organizador}', [OrganizadorController::class, 'update'])->name('Organizadores.update');
    Route::resource('Organizadores', OrganizadorController::class)->only(['index', 'create', 'store', 'show', 'edit', 'update', 'destroy']);

    Route::put('/Personas/{persona}', [PersonaController::class, 'update'])->name('Personas.update');
    Route::get('/Personas/inicio', [PersonaController::class, 'inicio'])->name('Personas.inicio'); // Define la ruta 'inicio' y asigna un nombre
    Route::resource('Personas', PersonaController::class)->only(['index', 'create', 'store', 'show', 'edit', 'update', 'destroy']);

    Route::put('/Salas/{sala}', [SalaController::class, 'update'])->name('Salas.update');
    Route::resource('Salas', SalaController::class)->only(['index', 'create', 'store', 'show', 'edit', 'update', 'destroy']);
});

// Rutas de autenticación
Route::get('/Usuarios/login', [AuthController::class, 'showLoginForm'])->name('Usuarios.login');
Route::post('/Usuarios/login', [AuthController::class, 'login'])->name('login');
Route::post('/Usuarios/logout', [AuthController::class, 'logout'])->name('logout'); // Ruta para cerrar sesión
Route::resource('Usuarios', UsuarioController::class)->only(['index', 'create', 'store', 'show', 'edit', 'update', 'destroy', 'login', 'inicio']);
Route::post('/Usuarios', [UsuarioController::class, 'store'])->name('Usuarios.store');

// Rutas públicas
Route::resource('somos', somosController::class)->only(['index']);
Route::resource('ubicacion', ubicacionController::class)->only(['index']);
