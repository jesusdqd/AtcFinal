@extends('layouts.chatboxm')

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/examen/examen.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Cursor/cursor.css') }}">
</head>

@section('content')
    @include('navbar.navbarsp')

    <div class="examen-container">
        <h1>Examen de {{ ucfirst($area) }}</h1>

        @if ($examen)
            <form method="POST" action="{{ route('examen.submit', ['area' => $area]) }}">
                @csrf
                @foreach (json_decode($examen->preguntas) as $key => $pregunta)
                    <div class="pregunta-container">
                        <p>{{ $pregunta->pregunta }}</p>
                        @foreach ($pregunta->respuestas as $respuesta)
                            <label>
                                <input type="radio" name="respuesta_{{ $key }}" value="{{ $respuesta }}"> {{ $respuesta }}
                            </label>
                        @endforeach
                    </div>
                @endforeach
                <button type="submit" class="btn-enviar">Enviar</button>
            </form>
        @else
            <p class="no-examen-msg">No hay exámenes disponibles para esta área.</p>
        @endif
    </div>
@endsection
