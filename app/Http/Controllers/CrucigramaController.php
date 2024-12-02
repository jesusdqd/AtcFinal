<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CrucigramaController extends Controller
{
    public function index()
{
    // Datos iniciales de los crucigramas por materia (simulado)
    $crucigramas = [
        'Matemáticas' => [
            'clues' => [
                ['id' => 1, 'number' => '1', 'text' => 'Resultado de 2 + 2.'],
                ['id' => 2, 'number' => '2', 'text' => 'Figura con tres lados.'],
            ],
            'grid' => [
                [['value' => 'S', 'editable' => false], ['value' => '', 'editable' => true]],
                [['value' => '', 'editable' => true], ['value' => '', 'editable' => true]],
            ],
        ],
        // Agrega más materias
    ];

    return view('crucigrama', compact('crucigramas'));
}

}