<?php

namespace App\Http\Controllers;

use App\Models\Examen; // Asegúrate de importar el modelo Examen
use Illuminate\Http\Request;

class ExamenController extends Controller
{
    public function index()
    {
        // Áreas disponibles
        $areas = ['matematicas', 'politica', 'arte', 'informatica', 'etica', 'quimica', 'lectura', 'religion'];
        
        // Retorna la vista con todas las áreas
        return view('examen.index', compact('areas'));
    }

    // Método para mostrar el examen de una área específica
    public function show($area)
    {
        // Obtiene el examen de la base de datos según el área
        $examen = Examen::where('area', $area)->first();
        
        // Retorna la vista del examen pasando el examen y el área
        return view('examen.examen', compact('examen', 'area'));
    }
    public function crearExamen()
{
    $examen = new Examen();
    $examen->area = 'matematicas';
    $examen->preguntas = json_encode([
        [
            'pregunta' => '¿Cuánto es 2 + 2?',
            'respuestas' => ['3', '4', '5'],
            'respuesta_correcta' => '4'
        ],
        [
            'pregunta' => '¿Cuánto es 5 x 6?',
            'respuestas' => ['30', '35', '40'],
            'respuesta_correcta' => '30'
        ]
    ]);
    $examen->save();

}
public function submitExamen(Request $request, $area)
{
    $examen = Examen::where('area', $area)->first();
    $preguntas = json_decode($examen->preguntas);

    $resultado = 0;
    foreach ($preguntas as $key => $pregunta) {
        if ($request->input('respuesta_' . $key) == $pregunta->respuesta_correcta) {
            $resultado++;
        }
    }

    return view('examen.resultado', compact('resultado', 'area'));
}

}