@extends('layouts.chatboxm')

<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Política</title>
    <link rel="stylesheet" href="{{ asset('css/areas/politica/politica.css') }}">
    <link rel="stylesheet" href="{{ asset('css/cursor/cursor.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,800;1,800&display=swap" rel="stylesheet">
</head>
<body>
    @include ('navbar.navbarsp')

    <main>
        <h1>BIENVENIDOS AL ÁREA DE POLÍTICA</h1>
        
        <!-- Descripción -->
        <section id="descripcion">
            <h2>¿Qué es la Política?</h2>
            <p>La política es el conjunto de actividades, conductas, relaciones e instituciones relacionadas con la toma de decisiones en una sociedad. En este ámbito se estudian los sistemas de gobierno, el ejercicio del poder, y la interacción entre las diferentes entidades del Estado.</p>
        </section>

        <!-- Temas y Subtemas -->
        <section id="temas">
            <h2>Temas</h2>
            <ul>
                <li>
                    <a href="#">Teoría Política</a>
                    <ul>
                        <li><a href="#">Democracia</a></li>
                        <li><a href="#">Autoritarismo</a></li>
                        <li><a href="#">Anarquismo</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">Política Internacional</a>
                    <ul>
                        <li><a href="#">Relaciones Internacionales</a></li>
                        <li><a href="#">Conflictos Globales</a></li>
                        <li><a href="#">Organismos Internacionales</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">Gobernanza</a>
                    <ul>
                        <li><a href="#">Sistemas de Gobierno</a></li>
                        <li><a href="#">El Estado de Derecho</a></li>
                        <li><a href="#">Justicia y Derecho</a></li>
                    </ul>
                </li>
            </ul>
        </section>
    </main>
</body>
</html>
