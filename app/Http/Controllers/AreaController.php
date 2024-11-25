<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AreaController extends Controller
{
    public function show($area)
    {
        if (view()->exists("html.areas.$area.$area") ) {
            return view("html.areas.$area.$area");
        }
        abort( 404);
    }
}
