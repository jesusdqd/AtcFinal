@extends('layouts.chatboxm')

<head>
    <link rel="stylesheet" href="{{ asset('css/areas/informatica/informatica.css') }}">
    <link rel="stylesheet" href="{{ asset('css/cursor/cursor.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,800;1,800&display=swap" rel="stylesheet">
    
</head>

<body>
    @include('navbar.navbarsp')

    <main>
        <h1>BIENVENIDOS AL AREA DE INFORMÁTICA</h1>
    </main>

    @section('content')
    <div class="container">
        <h1>Área de Informática</h1>

        <!-- Breve descripción del área de informática -->
        <p>
            En esta sección aprenderás sobre los principios fundamentales de la informática, desde los primeros desarrollos de las computadoras hasta las últimas innovaciones tecnológicas. Los temas incluyen programación, redes, sistemas operativos y más. ¡Explora los subtemas para profundizar tu conocimiento!
        </p>

        <div class="temas">
            <!-- Tema 1: Historia de la informática -->
            <div class="tema">
                <h2>Historia de la informática</h2>
                <ul>
                    <li><a href="#">Los primeros dispositivos computacionales</a></li>
                    <li><a href="#">La evolución de los lenguajes de programación</a></li>
                    <li><a href="#">La llegada de las computadoras personales</a></li>
                </ul>
            </div>

            <!-- Tema 2: Programación -->
            <div class="tema">
                <h2>Programación</h2>
                <ul>
                    <li><a href="#">Lenguajes de programación populares</a></li>
                    <li><a href="#">Estructuras de datos</a></li>
                    <li><a href="#">Algoritmos y lógica de programación</a></li>
                </ul>
            </div>

            <!-- Tema 3: Redes y comunicaciones -->
            <div class="tema">
                <h2>Redes y comunicaciones</h2>
                <ul>
                    <li><a href="#">Fundamentos de redes</a></li>
                    <li><a href="#">Protocolos de comunicación</a></li>
                    <li><a href="#">Redes locales vs. redes globales</a></li>
                </ul>
            </div>

            <!-- Tema 4: Sistemas operativos -->
            <div class="tema">
                <h2>Sistemas operativos</h2>
                <ul>
                    <li><a href="#">El papel de un sistema operativo</a></li>
                    <li><a href="#">Diferencias entre sistemas operativos populares</a></li>
                    <li><a href="#">Gestión de procesos y memoria</a></li>
                </ul>
            </div>

            <!-- Tema 5: Desarrollo web -->
            <div class="tema">
                <h2>Desarrollo web</h2>
                <ul>
                    <li><a href="#">Fundamentos de HTML y CSS</a></li>
                    <li><a href="#">Introducción a JavaScript</a></li>
                    <li><a href="#">Desarrollo de aplicaciones web interactivas</a></li>
                </ul>
            </div>

            <!-- Tema 6: Inteligencia artificial -->
            <div class="tema">
                <h2>Inteligencia artificial</h2>
                <ul>
                    <li><a href="#">Definición y tipos de IA</a></li>
                    <li><a href="#">Redes neuronales y aprendizaje automático</a></li>
                    <li><a href="#">IA en la vida cotidiana</a></li>
                </ul>
            </div>

            <!-- Tema 7: Ciberseguridad -->
            <div class="tema">
                <h2>Ciberseguridad</h2>
                <ul>
                    <li><a href="#">Amenazas informáticas comunes</a></li>
                    <li><a href="#">Seguridad en redes y dispositivos</a></li>
                    <li><a href="#">Cifrado y protección de datos</a></li>
                </ul>
            </div>

            <!-- Tema 8: Tecnologías emergentes -->
            <div class="tema">
                <h2>Tecnologías emergentes</h2>
                <ul>
                    <li><a href="#">Blockchain y criptomonedas</a></li>
                    <li><a href="#">Realidad aumentada y virtual</a></li>
                    <li><a href="#">Computación cuántica</a></li>
                </ul>
            </div>
        </div>
    </div>
    @endsection
</body>
</html>
