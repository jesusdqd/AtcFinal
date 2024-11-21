@extends('layouts.app')
<head>
    <link rel="stylesheet" href="{{ asset('css/areas/arte/art.css') }}">
</head>
@section('content')
    <nav class="navbar">
        <ul class="nav-links">
            <li class="dropdown">
                <a href="#" class="dropbtn">
                    <img src="/ApruebaTuConocimiento/Assets/Iconos/sombrero-de-graduacion.png" alt="Icono de Áreas" class="nav-icon">Áreas</a>
                <div class="dropdown-content">
                    <a href="/ApruebaTuConocimiento/Html/Areas/Quimica/Quimica.html">
                        <img src="/ApruebaTuConocimiento/Assets/Iconos/Areas/quimica.png" alt="Quimica" class="nav-icon">Química</a>
                    <a href="/ApruebaTuConocimiento/Html/Areas/Informatica/Informatica.html">
                        <img src="/ApruebaTuConocimiento/Assets/Iconos/Areas/informatica.png" alt="Informática" class="nav-icon">Informática</a>
                    <a href="/ApruebaTuConocimiento/Html/Areas/Religion/Religion.html">
                        <img src="/ApruebaTuConocimiento/Assets/Iconos/Areas/religion.png" alt="Religión" class="nav-icon">Religión</a>
                    <a href="/ApruebaTuConocimiento/Html/Areas/Matematicas/matematicas.html">
                        <img src="/ApruebaTuConocimiento/Assets/Iconos/Areas/matematicas.png" alt="Matemáticas" class="nav-icon">Matemáticas</a>
                    <a href="/ApruebaTuConocimiento/Html/Areas/Etica/Etica.html">
                        <img src="/ApruebaTuConocimiento/Assets/Iconos/Areas/etica.png" alt="Ética" class="nav-icon">Ética</a>
                    <a href="/ApruebaTuConocimiento/Html/Areas/Lectura/Lectura.html">
                        <img src="/ApruebaTuConocimiento/Assets/Iconos/Areas/lectura.png" alt="Lectura" class="nav-icon">Lectura</a>
                    <a href="/ApruebaTuConocimiento/Html/Areas/Politica/Politica.html">
                        <img src="/ApruebaTuConocimiento/Assets/Iconos/Areas/politica.png" alt="Política" class="nav-icon">Política</a>
                </div>
            </li>
            <div class="right-links">
                <li><a href="/ApruebaTuConocimiento/index.php">
                    <img src="/ApruebaTuConocimiento/Assets/Iconos/Barra_Navegacion/InicioBottom.png" alt="Icono de Inicio" style="margin-right: 20px;">Inicio</a></li>
                <li><a href="/Html/Navbar/Juegos/juegos.html">
                    <img src="/ApruebaTuConocimiento/Assets/Iconos/Barra_Navegacion/Mando.png" alt="Icono de Juegos"
                    style="margin-right: 20px;">Juegos</a></li>
                <li><a href="/Html/Navbar/Examen/examen.html">
                    <img src="/ApruebaTuConocimiento/Assets/Iconos/Barra_Navegacion/Examen.png" alt="Icono de Examen"
                    style="margin-right: 20px;">Exámenes</a></li>
            </div>
        </ul>
    </nav>

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
@endsection
