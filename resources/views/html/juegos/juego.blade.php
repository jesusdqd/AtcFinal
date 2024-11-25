@extends('html.layouts.chatboxm')

<head>
    <link rel="stylesheet" href="{{ asset('css/juegos/juego.css') }}">
</head>
@section('title', 'Trivia - Aprueba tu Conocimiento')

@section('content')
<div class="container">
    <h1>Juego de Trivia</h1>
    <p>Responde las siguientes preguntas:</p>
    <div id="app">
        <div v-for="pregunta in preguntas" :key="pregunta.id">
            <p>@{{ pregunta.texto }}</p>
            <button v-for="opcion in pregunta.opciones" :key="opcion" @click="seleccionarOpcion(opcion, pregunta.correcta)">
                @{{ opcion }}
            </button>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/vue@2"></script>
<script>
    new Vue({
        el: '#app',
        data: {
            preguntas: [
                { id: 1, texto: '¿Cuál es la capital de Francia?', opciones: ['Madrid', 'París', 'Berlín'], correcta: 'París' },
                { id: 2, texto: '¿Cuál es 2 + 2?', opciones: ['3', '4', '5'], correcta: '4' }
            ]
        },
        methods: {
            seleccionarOpcion(opcion, correcta) {
                if (opcion === correcta) {
                    alert('¡Correcto!');
                } else {
                    alert('Incorrecto, intenta de nuevo.');
                }
            }
        }
    });
</script>
@endpush

</body>