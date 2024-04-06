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
})->name('welcome');

// Agrupar rutas que requieren autenticación
Route::middleware(['auth'])->group(function () {
    Route::put('/Carteleras/{cartelera}', [CarteleraController::class, 'update'])->name('Carteleras.update');
    Route::resource('Carteleras', CarteleraController::class)->only(['index', 'create', 'store', 'show', 'edit', 'update', 'destroy']);

    Route::put('/Boletos/{boleto}', [BoletoController::class, 'update'])->name('Boletos.update');
    Route::resource('Boletos', BoletoController::class)->only(['index', 'create', 'store', 'show', 'edit', 'update', 'destroy']);

    Route::put('/Cajones/{cajon}', [CajonController::class, 'update'])->name('Cajones.update');
    Route::resource('Cajones', CajonController::class)->only(['index', 'create', 'store', 'show', 'edit', 'update', 'destroy']);

    Route::put('/Estacionamientos/{estacionamiento}', [EstacionamientoController::class, 'update'])->name('Estacionamientos.update');
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
// Ruta para 'somos'
Route::get('/resources/views/somos', function () {
    // Aquí puedes colocar la lógica que deseas ejecutar para esta ruta
    return view('somos.somos'); // Por ejemplo, retornar una vista llamada 'somos.blade.php'
})->name('somos');

// Ruta para 'ubicacion'
Route::get('/resources/views/ubicacion', function () {
    // Aquí puedes colocar la lógica que deseas ejecutar para esta ruta
    return view('ubicacion.ubicacion'); // Por ejemplo, retornar una vista llamada 'ubicacion.blade.php'
})->name('ubicacion');
