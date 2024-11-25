@extends('html.layouts.chatboxm')

<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Área de Ética</title>
    <link rel="stylesheet" href="{{ asset('css/areas/etica/etc.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,800;1,800&display=swap" rel="stylesheet">

</head>
<body>
    <nav class="navbar">
        <ul class="nav-links">
            <li class="dropdown">
                <a href="#" class="dropbtn">
                    <img src="/Assets/Iconos/sombrero-de-graduacion.png" alt="Icono de Áreas" class="nav-icon">Áreas</a>
                <div class="dropdown-content">
                    <a href="/ApruebaTuConocimiento/Html/Areas/Quimica/Quimica.html">
                        <img src="/Assets/Iconos/Areas/quimica.png" alt="Quimica" class="nav-icon">Química</a>
                    <a href="/ApruebaTuConocimiento/Html/Areas/Informatica/Informatica.html">
                        <img src="/Assets/Iconos/Areas/informatica.png" alt="Informática" class="nav-icon">Informática</a>
                    <a href="/ApruebaTuConocimiento/Html/Areas/Religion/Religion.html">
                        <img src="/Assets/Iconos/Areas/religion.png" alt="Religión" class="nav-icon">Religión</a>
                    <a href="/ApruebaTuConocimiento/Html/Areas/Politica/Politica.html">
                            <img src="/Assets/Iconos/Areas/politica.png" alt="Política" class="nav-icon">Política</a>
                    <a href="/ApruebaTuConocimiento/Html/Areas/Arte/Arte.html">
                        <img src="/Assets/Iconos/Areas/arte.png" alt="Arte" class="nav-icon">Arte</a>
                    <a href="/ApruebaTuConocimiento/Html/Areas/Matematicas/matematicas.html">
                        <img src="/Assets/Iconos/Areas/matematicas.png" alt="Matematicas" class="nav-icon">Matemáticas</a>
                    <a href="/ApruebaTuConocimiento/Html/Areas/Lectura/Lectura.html">
                        <img src="/Assets/Iconos/Areas/lectura.png" alt="Lectura" class="nav-icon">Lectura</a>
                </div>
            </li>
        </ul>
            <div class="right-links">
                <li><a href="{{ route('inicio') }}">
                    <img src="/Assets/Iconos/Barra_Navegacion/InicioBottom.png" alt="Icono de Inicio" class="nav-icon">Inicio</a></li>
                <li><a href="/Html/Navbar/Juegos/juegos.html">
                    <img src="/Assets/Iconos/Barra_Navegacion/Mando.png" alt="Icono de Juegos" class="nav-icon">Juegos</a></li>
                <li><a href="/Html/Navbar/Examen/examen.html">
                    <img src="/Assets/Iconos/Barra_Navegacion/Examen.png" alt="Icono de Examen" class="nav-icon">Exámenes</a></li>
            </div>
    </nav>
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

</body>
</html>
