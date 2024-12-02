@extends('layouts.chatboxm')

<head>
    
    <link rel="stylesheet" href="{{ asset('css/areas/etica/etica.css') }}">
    <link rel="stylesheet" href="{{ asset('css/cursor/cursor.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,800;1,800&display=swap" rel="stylesheet">

</head>
    @include ('navbar.navbarsp')

    <main>
        <h1>BIENVENIDOS AL ÁREA DE ÉTICA</h1>
        <section id="descripcion">
            <p>La ética es una rama de la filosofía que se ocupa de los valores y principios que guían el comportamiento humano. A través de ella, comprendemos la importancia de actuar con integridad y responsabilidad en diversos aspectos de la vida.</p>
        </section>

        <section id="temas">
            <h2>Temas</h2>
            <ul>
                <li><strong>Ética en la Vida Cotidiana</strong>
                    <ul>
                        <li>Respeto</li>
                        <li>Honestidad</li>
                        <li>Solidaridad</li>
                    </ul>
                </li>
                <li><strong>Ética Profesional</strong>
                    <ul>
                        <li>Responsabilidad</li>
                        <li>Confidencialidad</li>
                        <li>Compromiso</li>
                    </ul>
                </li>
                <li><strong>Ética en la Sociedad</strong>
                    <ul>
                        <li>Justicia</li>
                        <li>Igualdad</li>
                        <li>Tolerancia</li>
                    </ul>
                </li>
            </ul>
        </section>
    </main>
