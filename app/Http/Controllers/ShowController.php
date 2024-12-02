<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function show($id)
{
    // Simula datos del área y preguntas.
    $areas = [
        1 => ['id' => 1, 'nombre' => 'Matemáticas'],
        2 => ['id' => 2, 'nombre' => 'Política'],
        3 => ['id' => 3, 'nombre' => 'Informatica'],
    ];

    $preguntas = [
        ['id' => 1, 'texto' => '¿Cuánto es 2 + 2?', 'opciones' => ['3', '4', '5']],
        ['id' => 2, 'texto' => '¿Cuál es la raíz cuadrada de 16?', 'opciones' => ['2', '4', '8']],
        // Más preguntas...
    ];

    if (!isset($areas[$id])) {
        abort(404); // Retorna un error 404 si el área no existe.
    }

    $area = $areas[$id];
    return view('examen.show', compact('area', 'preguntas'));
}

}
