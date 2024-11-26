<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExamenController extends Controller
{
    public function index($id = null)
    {
        if ($id) {
            // Lógica para mostrar un examen específico
            return view('html.examen.index', ['id' => $id]);
        }

        // Lógica para mostrar una lista de exámenes
        return view('html.examen.list');
    }

    public function responder(Request $request, $id)
    {
        // Lógica para manejar las respuestas del examen
        return response()->json(['message' => 'Respuesta guardada']);
    }
}
