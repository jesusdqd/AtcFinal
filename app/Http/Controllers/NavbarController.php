<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NavbarController extends Controller
{
    public function show(){
        return view('html.navbar.navbar');
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
        return view('html.navbar.navif.novedades');
    }

    public function contacto(){
        return view('html.navbar.navif.contacto');
    }

    public function reseñas(){
        return view('html.navbar.navif.reseñas');
    }
}
