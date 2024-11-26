<?php

use App\Http\Controllers\AreaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NavbarController;
use App\Http\Controllers\NavspController;
use App\Http\Controllers\JuegoController;
use App\Http\Controllers\ExamenController;
use App\Http\Controllers\CrucigramaController;
use App\Http\Controllers\AuthController;

// Página de inicio
Route::get('/', function () {
    return view('welcome');
});

Route::get('/juegos/{tipo}', function ($tipo) {
    if ($tipo === 'trivia') {
        return view('juegos.trivia'); // Vista para trivia
    } elseif ($tipo === 'crucigrama') {
        return view('juegos.crucigrama'); // Vista para crucigrama
    }
})->name('juegos.index');

// routes/web.php

// Ruta para la vista de inicio de sesión
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');

// Ruta para procesar el formulario de inicio de sesión
Route::post('/login', [AuthController::class, 'login']);

// Ruta para la vista de registro
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');

// Ruta para procesar el formulario de registro
Route::post('/register', [AuthController::class, 'register']);


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
Route::get('/sesion', [NavspController::class, 'sesion'])->name('sesion');


Route::get('/novedades', [NavbarController::class, 'novedades'])->name('navbar.navif.novedades');
Route::get('/contacto', [NavbarController::class, 'contacto'])->name('navbar.navif.contacto');
Route::get('/reseñas', [NavbarController::class, 'reseñas'])->name('navbar.navif.reseñas');

Route::get('/juegos', [JuegoController::class, 'juegos'])->name('juegos');
Route::get('/crucigrama', [CrucigramaController::class, 'index'])->name('crucigrama.index');


Route::get('/examen/{id}', [ExamenController::class, 'index'])->name('examen.show');
Route::post('/examen/{id}/responder', [ExamenController::class, 'responder'])->name('examen.responder');

Route::get('/examenes', [ExamenController::class, 'index'])->name('examen.index');
