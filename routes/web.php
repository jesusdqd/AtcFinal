<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NavbarController;

// Página de inicio
Route::get('/', function () {
    return view('welcome');
});

// Rutas para las áreas de conocimiento
Route::get('/areas/arte', function () {
    return view('html.areas.arte.arte');
});

Route::get('/areas/etica', function () {
    return view('html.areas.etica.etica');
});

Route::get('/areas/matematicas', function () {
    return view('html.areas.matematicas.matematicas');
});

Route::get('/areas/politica', function () {
    return view('html.areas.politica.politica');
});

Route::get('/areas/quimica', function () {
    return view('html.areas.quimica.quimica');
});

Route::get('/areas/religion', function () {
    return view('html.areas.religion.religion');
});

Route::get('/areas/lectura', function () {
    return view('html.areas.lectura.lectura');
});

Route::get('/areas/informatica', function () {
    return view('html.areas.informatica.informatica');
});
// Controladores
Route::get('', [HomeController::class, 'index'])->name('home');
Route::get('/navbar', [NavbarController::class, 'show'])->name('navbar.show');
Route::get('/inicio', [NavbarController::class, 'inicio'])->name('navbar.inicio');
Route::get('/ranking', [NavbarController::class, 'ranking'])->name('navbar.ranking');
Route::get('/juegos', [NavbarController::class, 'juegos'])->name('navbar.juegos');
