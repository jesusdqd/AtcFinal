<link rel="stylesheet" href="{{ asset('css/cursor.css') }}">

@section('content')
    <div id="resultado-container">
        <h2>Resultado del Examen</h2>
        <p>Has obtenido {{ $resultado }} de {{ count($examen->preguntas) }} respuestas correctas.</p>
        <a href="{{ route('examen.index', $id) }}">Volver a intentarlo</a>
    </div>
@endsection