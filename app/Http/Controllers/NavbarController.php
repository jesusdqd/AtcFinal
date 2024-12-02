<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NavbarController extends Controller
{
    public function show(){
        return view('navbar.navbar');
    }

    public function inicio(){
        return view('index');
    }

    public function ranking(){
        return view('ranking');
    }

    public function juegos(){
        return view('juegos');
    }

    public function novedades(){
        return view('navbar.navif.novedades');
    }

    public function contacto(){
        return view('navbar.navif.contacto');
    }

    public function reseñas(){
        return view('navbar.navif.reseñas');
    }

    public function acerca(){
        return view('navbar.navif.acerca');
    }

    public function privacidad(){
        return view('navbar.navif.privacidad');
    }

    public function terminos(){
        return view('navbar.navif.terminos');
    }
}
