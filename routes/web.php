<?php
use App\Http\Controllers\AreaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NavbarController;
use App\Http\Controllers\NavspController;
use App\Http\Controllers\JuegoController;
use App\Http\Controllers\ExamenController;
use App\Http\Controllers\CrucigramaController;
use App\Http\Controllers\BusquedaController; 
use App\Http\Controllers\TemaController; 
use App\Http\Controllers\SubtemaController; 
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactController;

// Página de inicio
Route::get('/', function () {
    return view('index');
});
// Registro/Sesion
Route::prefix('auth')->group(function (){
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
    Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
    Route::post('/register', [AuthController::class, 'register']);
});
// Juegos
Route::prefix('juegos')->group(function () {
    Route::get('/{tipo}', function ($tipo) {
        if ($tipo === 'trivia') {
            return view('juegos.trivia'); // Vista para trivia
        } elseif ($tipo === 'crucigrama') {
            return view('juegos.crucigrama'); // Vista para crucigrama
        }
    })->name('juegos.index');
    Route::get('/', [JuegoController::class, 'juegos'])->name('juegos');
    Route::get('/crucigrama', [CrucigramaController::class, 'index'])->name('crucigrama.index');
});
// Areas
Route::get('/areas/{area}',[AreaController::class, 'show'])->name('areas.show');
    
// Index
Route::prefix('navbar')->group(function () {
    Route::get('/', [NavbarController::class, 'show'])->name('navbar.show');
    Route::get('/inicio', [NavbarController::class, 'inicio'])->name('navbar.inicio');
    Route::get('/novedades', [NavbarController::class, 'novedades'])->name('navbar.navif.novedades');
    Route::get('/contacto', [NavbarController::class, 'contacto'])->name('navbar.navif.contacto');
    Route::post('/contacto/submit', [NavbarController::class, 'submit'])->name('contacto.submit');
    Route::get('/reseñas', [NavbarController::class, 'reseñas'])->name('navbar.navif.reseñas');
    Route::get('/acerca', [NavbarController::class, 'acerca'])->name('navbar.navif.acerca');
    Route::get('/privacidad', [NavbarController::class, 'privacidad'])->name('navbar.navif.privacidad');
    Route::get('/terminos', [NavbarController::class, 'terminos'])->name('navbar.navif.terminos');
    
});

// Ruta para el perfil del usuario
Route::get('/perfil', function () {
    return view('perfil');  // Asegúrate de crear esta vista de perfil
})->name('perfil')->middleware('auth'); 
// Ruta para actualizar el perfil
Route::post('/perfil/actualizar', [AuthController::class, 'actualizarPerfil'])->name('perfil.actualizar')->middleware('auth');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


// Exámenes
Route::get('/examen', [ExamenController::class, 'index'])->name('examen.index');
Route::get('/examen/{id}', [ExamenController::class, 'show'])->name('examen.show');
Route::post('/examen/{id}/submit', [ExamenController::class, 'submit'])->name('examen.submit');


// NavbarSP

// NavbarSuperior

Route::prefix('navsp')->group(function () {
    Route::get('/inicio', [NavspController::class, 'inicio'])->name('inicio');
    Route::get('/juegos', [NavspController::class, 'juegos'])->name('juegos');
    Route::get('/sesion', [NavspController::class, 'sesion'])->name('sesion');

});

Route::get('/buscar', [BusquedaController::class, 'buscar'])->name('buscar');

Route::get('/tema/{id}', [TemaController::class, 'show'])->name('tema.show');
Route::get('/subtema/{id}', [SubtemaController::class, 'show'])->name('subtema.show');

Route::get('/ranking', [NavspController::class, 'ranking'])->name('ranking');

// Rutas para el examen
Route::get('/examen', [ExamenController::class, 'index'])->name('examen.examen');

Route::post('/contacts', [ContactController::class, 'store'])->name('contacts.store');