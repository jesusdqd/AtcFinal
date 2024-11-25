<?php

use App\Http\Controllers\AreaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NavbarController;
use App\Http\Controllers\NavspController;
use App\Http\Controllers\JuegoController;

// Página de inicio
Route::get('/', function () {
    return view('welcome');
});

// Rutas para las áreas de conocimiento
Route::get('/areas/{area}',[AreaController::class, 'show'])->name('areas.show');
    
// Controladores
Route::get('', [HomeController::class, 'index'])->name('home');
Route::get('/navbar', [NavbarController::class, 'show'])->name('navbar.show');
Route::get('/inicio', [NavbarController::class, 'inicio'])->name('navbar.inicio');
Route::get('/ranking', [NavbarController::class, 'ranking'])->name('navbar.ranking');
Route::get('/juegos', [NavbarController::class, 'juegos'])->name('navbar.juegos');


Route::get('/', [NavspController::class, 'inicio'])->name('inicio');
Route::get('/juegos', [NavspController::class, 'juegos'])->name('juegos');
Route::get('/examenes', [NavspController::class, 'examenes'])->name('examenes');


Route::get('/novedades', [NavbarController::class, 'novedades'])->name('navbar.navif.novedades');
Route::get('/contacto', [NavbarController::class, 'contacto'])->name('navbar.navif.contacto');
Route::get('/reseñas', [NavbarController::class, 'reseñas'])->name('navbar.navif.reseñas');

Route::get('/juegos', [JuegoController::class, 'juegos'])->name('juegos');