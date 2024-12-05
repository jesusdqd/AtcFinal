<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NavspController extends Controller
{
    public function inicio()
    {
        return view('index'); // Redirige a la vista Inicio
    }

    public function juegos()
    {
        return view('juegos.juego'); // Redirige a la vista Juegos
    }

    public function examenes()
    {
        return view('navbar.examen'); // Redirige a la vista Exámenes
    }
    public function ranking()
    {
        return view('ranking.ranking'); // Redirige a la vista Exámenes
    }
  
}
