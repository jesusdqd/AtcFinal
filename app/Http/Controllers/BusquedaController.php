<?php

// app/Http/Controllers/BusquedaController.php
namespace App\Http\Controllers;
use App\Models\Tema; // Importar el modelo Tema
use App\Models\Subtema; // Importar el modelo Subtema
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Http\Request;

class BusquedaController extends Controller
{
    use HasFactory;
    public function buscar(Request $request)
    {
        $query = $request->input('search');
        $temas = Tema::where('nombre', 'like', "%$query%")->get();
        $subtemas = Subtema::where('nombre', 'like', "%$query%")->get();
        return view('navbar.resultados', compact('temas', 'subtemas'));
    }
}

