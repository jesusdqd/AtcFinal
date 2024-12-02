<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TemaController extends Controller
{
    public function show($id)
{
    $tema = Tema::findOrFail($id);
    return view('tema.show', compact('tema'));
}

public function showSubtema($id)
{
    $subtema = Subtema::findOrFail($id);
    return view('subtema.show', compact('subtema'));
}

}
