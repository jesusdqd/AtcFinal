@extends('layouts.chatboxm')

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="{{ asset('css/cursor.css') }}">
@section('content')
<div id="crucigrama-container">
    <!-- Menú de materias -->
    <div id="menu-container" v-if="!selectedSubject">
        <h2>Crucigramas</h2>
        <p>Selecciona una materia para comenzar el crucigrama:</p>
        <div id="subjects-menu">
            <button v-for="subject in subjects" :key="subject" @click="selectSubject(subject)">
                @{{ subject }}
            </button>
        </div>
    </div>

    <!-- Crucigrama -->
    <div id="crossword-container" v-if="selectedSubject">
        <h2>@{{ selectedSubject }}</h2>
        <p>Completa el crucigrama relacionado con la materia seleccionada:</p>

        <div id="crossword-grid">
            <div v-for="(row, rowIndex) in currentCrossword.grid" :key="rowIndex" class="row">
                <span v-for="(cell, colIndex) in row" :key="colIndex" class="cell">
                    <input v-if="cell.editable" type="text" maxlength="1" v-model="cell.value" />
                    <span v-else>@{{ cell.value }}</span>
                </span>
            </div>
        </div>

        <div id="clues-container">
            <h3>Pistas</h3>
            <ul>
                <li v-for="clue in currentCrossword.clues" :key="clue.id">
                    <strong>@{{ clue.number }}</strong> @{{ clue.text }}
                </li>
            </ul>
        </div>

        <button @click="checkAnswers">Verificar Respuestas</button>
        <button @click="resetCrossword">Reiniciar</button>

        <div id="feedback" v-if="feedbackMessage">
            <p>@{{ feedbackMessage }}</p>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    new Vue({
        el: '#crucigrama-container',
        data: {
            subjects: [
                'Matemáticas',
                'Política',
                'Arte',
                'Informática',
                'Ética',
                'Química',
                'Lectura',
                'Religión'
            ],
            selectedSubject: null,
            crosswords: {
                Matemáticas: {
                    grid: [
                        [{ value: 'S', editable: false }, { value: '', editable: true }, { value: '', editable: true }],
                        [{ value: '', editable: true }, { value: '', editable: true }, { value: '', editable: true }],
                        [{ value: '', editable: true }, { value: '', editable: true }, { value: '', editable: true }],
                    ],
                    clues: [
                        { id: 1, number: '1', text: 'Resultado de 2 + 2.' },
                        { id: 2, number: '2', text: 'Figura con tres lados.' },
                    ],
                },
                // Agregar más crucigramas según materias...
            },
            currentCrossword: null,
            feedbackMessage: ''
        },
        methods: {
            selectSubject(subject) {
                this.selectedSubject = subject;
                this.currentCrossword = this.crosswords[subject];
            },
            checkAnswers() {
                const correctAnswers = ['SUMA', 'TRIANGULO']; // Ejemplo
                let allCorrect = true;

                this.currentCrossword.grid.forEach((row, rowIndex) => {
                    row.forEach((cell, colIndex) => {
                        if (cell.editable && cell.value !== correctAnswers[rowIndex]?.[colIndex]) {
                            allCorrect = false;
                        }
                    });
                });

                this.feedbackMessage = allCorrect ? '¡Correcto! Todas las respuestas son válidas.' : 'Algunas respuestas son incorrectas, intenta nuevamente.';
            },
            resetCrossword() {
                this.currentCrossword.grid.forEach((row) => {
                    row.forEach((cell) => {
                        if (cell.editable) {
                            cell.value = '';
                        }
                    });
                });
                this.feedbackMessage = '';
            },
        },
    });
</script>
@endsection