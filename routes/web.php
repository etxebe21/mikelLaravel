<?php

use App\Http\Controllers\EdificiosController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\RoutesController;
use App\Http\Controllers\ProyectosController;
use App\Http\Controllers\ViviendasController;
use Illuminate\Support\Facades\Route;

Route::get('/', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

// Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
   
    Route::middleware('auth')->group(function () {
    // Rutas protegidas que requieren autenticación

    Route::get('/home', [RoutesController::class, 'index'])->name('home');

    Route::get('/examples', function(){return view('examples');})->name('examples');

    Route::get('/lista-edificios', [RoutesController::class, 'verEdificios'])->name('lista-edificios');
    Route::get('/lista-edificios/{id}', [RoutesController::class, 'verEdificiosProyecto'])->name('lista-edificios-proyecto');
    Route::get('/lista-proyectos', [RoutesController::class, 'verProyectos'])->name('lista-proyectos');
    Route::get('/lista-viviendas', [RoutesController::class, 'verViviendas'])->name('lista-viviendas');
    Route::get('/lista-viviendas/{id}', [RoutesController::class, 'verViviendasEdificio'])->name('lista-viviendas-edificio');    
    Route::get('/lista-usuarios', [RoutesController::class, 'verUsuarios'])->name('lista-usuarios');

    Route::get('/crear-proyecto', [RoutesController::class, 'crearProyecto'])->name('crear-proyecto');
    Route::get('/crear-edificio', [RoutesController::class, 'crearEdificio'])->name('crear-edificio');
    Route::get('/crear-vivienda', [RoutesController::class, 'crearVivienda'])->name('crear-vivienda');
    Route::get('/crear-usuario', [RoutesController::class, 'crearUsuario'])->name('crear-usuario');

    Route::get('/eliminar-proyecto/{id}', [ProyectosController::class, 'deleteProyecto'])->name('eliminar-proyecto');
    Route::get('/eliminar-edificio/{id}', [EdificiosController::class, 'deleteEdificio'])->name('eliminar-edificio');
    Route::get('/eliminar-vivienda/{id}', [ViviendasController::class, 'deleteVivienda'])->name('eliminar-vivienda');
    Route::get('/eliminar-usuario/{id}', [LoginController::class, 'deleteUsuario'])->name('eliminar-usuario');


});
