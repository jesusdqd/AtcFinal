<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExamenController extends Controller
{
    
    public function index()
    {
        $areas = [
            ['id' => 1, 'nombre' => 'Matemáticas', 'descripcion' => 'Examen sobre matemáticas básicas.'],
            ['id' => 2, 'nombre' => 'Política', 'descripcion' => 'Examen sobre conocimientos políticos.'],
            // Agrega más áreas...
        ];
        return view('examen.examen', compact('areas'));
    }

    public function show($id)
    {
        // Definición de áreas
        $areas = [
            1 => ['id' => 1, 'nombre' => 'Matemáticas'],
            2 => ['id' => 2, 'nombre' => 'Política'],
            3 => ['id' => 3, 'nombre' => 'Informatica'],
        ];

        $preguntas = [
            1 => [
                ['id' => 1, 'texto' => '¿Cuánto es 2 + 2?', 'opciones' => ['3', '4', '5']],
                ['id' => 2, 'texto' => '¿Cuál es la raíz cuadrada de 16?', 'opciones' => ['2', '4', '8']],
            ],

        ];
    
        if (!isset($areas[$id])) {
            abort(404); 
        }
    
        $area = $areas[$id];
        $preguntasArea = $preguntas[$id]; // Obtiene las preguntas correspondientes al área seleccionada
    
        return view('examen.show', compact('area', 'preguntasArea'));
    }
}

