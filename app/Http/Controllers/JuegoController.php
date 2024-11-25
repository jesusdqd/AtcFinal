<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JuegoController extends Controller
{
    public function juegos(){
        return view('html.juegos.juego');
    }
}
