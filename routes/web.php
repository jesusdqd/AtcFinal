<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NavbarController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('', [HomeController::class, 'index'])->name('home'); 

Route::get('/navbar', [NavbarController::class, 'show'])->name('navbar.show');
Route::get('/inicio', [NavbarController::class, 'inicio'])->name('navbar.inicio');
Route::get('/ranking', [NavbarController::class, 'ranking'])->name('navbar.ranking');
Route::get('/juegos', [NavbarController::class, 'juegos'])->name('navbar.juegos');