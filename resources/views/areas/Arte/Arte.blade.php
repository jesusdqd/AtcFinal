@extends('layouts.chatboxm')

<head>
    <link rel="stylesheet" href="{{ asset('css/areas/arte/arte.css') }}">
    <link rel="stylesheet" href="{{ asset('css/cursor/cursor.css') }}">
</head>

@include ('navbar.navbarsp')

    <main>
        <h1>BIENVENIDOS AL ÁREA DE ARTE</h1>
        <section id="descripcion">
            <h2>Descripción del Área</h2>
            <p>El área de Arte tiene como objetivo el estudio y la práctica de distintas formas de expresión creativa. Se exploran técnicas en pintura, escultura, música, danza y más, promoviendo la apreciación artística y el desarrollo de habilidades creativas.</p>
        </section>

        <!-- Estructura de temas y subtemas -->
        <section id="temas">
            <h2>Temas y Subtemas</h2>
            <ul>
                <li>
                    Pintura
                    <ul>
                        <li>Óleos</li>
                        <li>Acuarelas</li>
                        <li>Frescos</li>
                    </ul>
                </li>
                <li>
                    Escultura
                    <ul>
                        <li>Escultura en piedra</li>
                        <li>Escultura en bronce</li>
                    </ul>
                </li>
                <li>
                    Música
                    <ul>
                        <li>Composición musical</li>
                        <li>Instrumentos musicales</li>
                    </ul>
                </li>
                <li>
                    Danza
                    <ul>
                        <li>Ballet</li>
                        <li>Danza contemporánea</li>
                    </ul>
                </li>
            </ul>
        </section>
    </main>
