@extends('layouts.chatboxm')

<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lectura</title>
    <link rel="stylesheet" href="{{ asset('css/areas/lectura/lectura.css') }}">
    <link rel="stylesheet" href="{{ asset('css/cursor/cursor.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,800;1,800&display=swap" rel="stylesheet">
</head>
<body>
    @include ('navbar.navbarsp')

    <main>
        <h1>BIENVENIDOS AL AREA DE LECTURA</h1>
        
        <!-- Descripción del Área -->
        <div class="description">
            <p>El área de lectura tiene como objetivo mejorar las habilidades de comprensión y análisis de textos, desarrollar el amor por la lectura y potenciar el conocimiento sobre diversas obras literarias.</p>
        </div>

        <!-- Temas y Subtemas -->
        <div class="topics">
            <ul>
                <li><a href="#">Tema 1: Lectura Crítica</a></li>
                <li><a href="#">Tema 2: Análisis de Textos Literarios</a></li>
                <li><a href="#">Tema 3: Literatura Clásica</a></li>
                <li><a href="#">Tema 4: Literatura Contemporánea</a></li>
            </ul>
        </div>
    </main>
</body>
</html>
