@extends('layouts.chatboxm')
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="{{ asset('css/js.css') }}">
<link rel="stylesheet" href="{{ asset('css/cursor.css') }}">

@section('content')

@include ('navbar.navbarsp')
<div id="trivia-container" class="text-center mt-5">
    <!-- Menú de selección de materias -->
    <div id="menu-container">
        <h2>Trivias</h2>
        <p>Selecciona una materia para comenzar:</p>
        <div id="subjects-menu" class="d-grid gap-2">
            <!-- Las materias se llenarán dinámicamente -->
        </div>
    </div>

    <!-- Contenedor del juego -->
    <div id="questions-container" class="d-none mt-4">
        <h2 id="question-title">Pregunta aquí</h2>
        <div id="options-list" class="d-grid gap-2">
            <!-- Botones de opciones se llenarán dinámicamente -->
        </div>
        <div class="mt-3">
            <span id="timer" class="badge bg-warning text-dark">Tiempo: 10</span>
        </div>
        <p id="feedback" class="mt-3"></p> <!-- Feedback dinámico -->
    </div>
</div>

<script>
    // Ejemplo de preguntas organizadas por materias
   
        const triviaData = {
    Matemáticas: [
        { question: "¿Cuánto es 5 + 3?", options: ["5", "8", "10", "15"], correct: 1 },
        { question: "¿Cuál es el resultado de 12 ÷ 4?", options: ["3", "6", "8", "4"], correct: 0 },
    ],
    Política: [
        { question: "¿Qué forma de gobierno tiene Colombia?", options: ["Monarquía", "República", "Dictadura", "Democracia"], correct: 1 },
        { question: "¿Quién es el jefe de Estado en Colombia?", options: ["El presidente", "El Congreso", "La Corte Suprema", "El pueblo"], correct: 0 },
    ],
    Arte: [
        { question: "¿Quién pintó la Mona Lisa?", options: ["Van Gogh", "Leonardo da Vinci", "Picasso", "Monet"], correct: 1 },
        { question: "¿Qué movimiento artístico representa Salvador Dalí?", options: ["Surrealismo", "Impresionismo", "Cubismo", "Expresionismo"], correct: 0 },
    ],
    Informática: [
        { question: "¿Qué significa HTML?", options: ["Hyper Text Markup Language", "Hyperlinks and Text Markup Language", "Home Tool Markup Language", "Hyper Tool Machine Language"], correct: 0 },
        { question: "¿Qué empresa creó el sistema operativo Windows?", options: ["Google", "Microsoft", "Apple", "IBM"], correct: 1 },
    ],
    Ética: [
        { question: "¿Qué es la ética?", options: ["El estudio del comportamiento humano", "La ciencia del medio ambiente", "El análisis de los números", "La creación de leyes"], correct: 0 },
        { question: "¿Qué filósofo es conocido como el padre de la ética?", options: ["Sócrates", "Platón", "Aristóteles", "Descartes"], correct: 2 },
    ],
    Química: [
        { question: "¿Cuál es el símbolo químico del agua?", options: ["O", "H2O", "CO2", "NaCl"], correct: 1 },
        { question: "¿Qué gas es esencial para la respiración?", options: ["Nitrógeno", "Oxígeno", "Hidrógeno", "Helio"], correct: 1 },
    ],
    Lectura: [
        { question: "¿Qué tipo de texto narra una historia?", options: ["Expositivo", "Narrativo", "Argumentativo", "Descriptivo"], correct: 1 },
        { question: "¿Qué es una metáfora?", options: ["Una comparación directa", "Una exageración", "Una comparación implícita", "Un diálogo"], correct: 2 },
    ],
    Religión: [
        { question: "¿Quién es considerado el fundador del cristianismo?", options: ["Abraham", "Jesucristo", "Moisés", "Buda"], correct: 1 },
        { question: "¿Qué libro es sagrado en el Islam?", options: ["La Biblia", "El Corán", "El Talmud", "Los Vedas"], correct: 1 },
    ],
};


    let selectedSubject = null;
    let currentQuestionIndex = 0;
    let score = 0;
    let timerInterval;

    document.addEventListener("DOMContentLoaded", function () {
        const subjectsMenu = document.getElementById("subjects-menu");
        const menuContainer = document.getElementById("menu-container");
        const questionsContainer = document.getElementById("questions-container");
        const questionTitle = document.getElementById("question-title");
        const optionsList = document.getElementById("options-list");
        const timerElement = document.getElementById("timer");
        const feedback = document.getElementById("feedback");

        const subjectColors = {
            Matemáticas: "math-button",
            Política: "politics-button",
            Arte: "art-button",
            Informática: "cs-button",
            Ética: "ethics-button",
            Química: "chemistry-button",
            Lectura: "reading-button",
            Religión: "religion-button",
        };
        // Cargar materias dinámicamente
        for (const subject in triviaData) {
            const button = document.createElement("button");
            button.textContent = subject;
            button.className = `subject-button ${subjectColors[subject]}`;
            button.addEventListener("click", () => startTrivia(subject));
            subjectsMenu.appendChild(button);
        }

        function startTrivia(subject) {
            selectedSubject = subject;
            currentQuestionIndex = 0;
            score = 0;
            menuContainer.classList.add("d-none");
            questionsContainer.classList.remove("d-none");
            loadQuestion();
        }

        function loadQuestion() {
            feedback.textContent = ""; // Limpiar feedback
            const questions = triviaData[selectedSubject];
            if (currentQuestionIndex < questions.length) {
                const currentQuestion = questions[currentQuestionIndex];
                questionTitle.textContent = currentQuestion.question;
                optionsList.innerHTML = ""; // Limpiar opciones anteriores
                currentQuestion.options.forEach((option, index) => {
                    const button = document.createElement("button");
                    button.textContent = option;
                    button.className = "btn btn-outline-primary btn-lg";
                    button.addEventListener("click", () => handleAnswer(index));
                    optionsList.appendChild(button);
                });
                startTimer();
            } else {
                showResults();
            }
        }

        function handleAnswer(selectedIndex) {
            clearInterval(timerInterval);
            const questions = triviaData[selectedSubject];
            const currentQuestion = questions[currentQuestionIndex];
            if (selectedIndex === currentQuestion.correct) {
                feedback.textContent = "¡Correcto!";
                feedback.className = "text-success";
                score++; // Aumentar el puntaje
            } else {
                feedback.textContent = `Fallaste. La respuesta correcta era: ${currentQuestion.options[currentQuestion.correct]}`;
                feedback.className = "text-danger";
            }
            currentQuestionIndex++;
            setTimeout(loadQuestion, 2000); // Mostrar la siguiente pregunta después de 2 segundos
        }

        function startTimer() {
            let timeLeft = 10;
            timerElement.textContent = `Tiempo: ${timeLeft}`;
            timerInterval = setInterval(() => {
                timeLeft--;
                timerElement.textContent = `Tiempo: ${timeLeft}`;
                if (timeLeft <= 0) {
                    clearInterval(timerInterval);
                    feedback.textContent = `Se acabó el tiempo. La respuesta correcta era: ${triviaData[selectedSubject][currentQuestionIndex].options[triviaData[selectedSubject][currentQuestionIndex].correct]}`;
                    feedback.className = "text-warning";
                    currentQuestionIndex++;
                    setTimeout(loadQuestion, 2000);
                }
            }, 1000);
        }

        function showResults() {
            questionsContainer.innerHTML = `
                <h3>¡Trivia completada!</h3>
                <p>Tu puntuación final es: ${score} de ${triviaData[selectedSubject].length}</p>
                <button class="btn btn-outline-secondary" onclick="location.reload()">Volver al menú</button>
            `;
        }
    });
</script>

<style>
    #trivia-container {
        max-width: 600px;
        margin: 0 auto;
    }
</style>
@endsection

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
