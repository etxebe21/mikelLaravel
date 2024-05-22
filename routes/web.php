<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\RoutesController;
use Illuminate\Support\Facades\Route;

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);
Route::get('/home', [RoutesController::class, 'index'])->name('home');

// Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
   
    Route::middleware('auth')->group(function () {
        // Rutas protegidas que requieren autenticación
    
    // Route::get('/home', function () {
    //     return view('home');
    // })->name('home');

    //Route::get('/home', [RoutesController::class, 'index'])->name('home');

    Route::get('/examples', function(){return view('examples');})->name('examples');

    Route::get('/lista-edificios', [RoutesController::class, 'verEdificios'])->name('lista-edificios');
    Route::get('/lista-proyectos', [RoutesController::class, 'verProyectos'])->name('lista-proyectos');
});
