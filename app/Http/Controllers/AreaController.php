<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AreaController extends Controller
{
    public function show($area)
    {
        if (view()->exists("areas.$area.$area") ) {
            return view("areas.$area.$area");
        }
        abort( 404);
    }
}
