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
}
