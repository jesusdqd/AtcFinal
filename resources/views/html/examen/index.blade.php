<link rel="stylesheet" href="{{ asset('css/cursor.css') }}">

@section('content')
    <div id="examen-container">
        <h2>{{ $examen->titulo }}</h2>
        <form action="{{ route('examen.responder', $examen->id) }}" method="POST">
            @csrf
            @foreach ($preguntas as $pregunta)
                <div class="pregunta">
                    <p>{{ $pregunta->contenido }}</p>
                    @foreach ($pregunta->respuestas as $respuesta)
                        <div>
                            <input type="radio" name="respuestas[{{ $pregunta->id }}]" value="{{ $respuesta->id }}">
                            <label>{{ $respuesta->contenido }}</label>
                        </div>
                    @endforeach
                </div>
            @endforeach
            <button type="submit">Enviar Respuestas</button>
        </form>
    </div>
@endsection