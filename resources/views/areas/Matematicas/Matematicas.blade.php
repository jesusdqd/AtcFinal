@extends('layouts.chatboxm')

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matemáticas</title>
    <link rel="stylesheet" href="{{ asset('css/areas/matematicas/matematicas.css') }}">
    <link rel="stylesheet" href="{{ asset('css/cursor/cursor.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,800;1,800&display=swap" rel="stylesheet">
</head>
<body>
        @include ('navbar.navbarsp')

    <main>
        <h1>BIENVENIDOS AL ÁREA DE MATEMÁTICAS</h1>

        <!-- Descripción del área de Matemáticas -->
        <section id="descripcion">
            <h2>Descripción del Área</h2>
            <p>El área de Matemáticas se centra en el estudio de los números, las fórmulas, y los conceptos abstractos para resolver problemas. Abarca temas como álgebra, geometría, cálculo y más, promoviendo el razonamiento lógico y la resolución de problemas complejos.</p>
        </section>

        <!-- Estructura de temas y subtemas -->
        <section id="temas">
            <h2>Temas y Subtemas</h2>
            <ul>
                <li>
                    Álgebra
                    <ul>
                        <li>Ecuaciones lineales</li>
                        <li>Desigualdades</li>
                        <li>Funciones algebraicas</li>
                    </ul>
                </li>
                <li>
                    Geometría
                    <ul>
                        <li>Figuras geométricas</li>
                        <li>Teorema de Pitágoras</li>
                        <li>Áreas y volúmenes</li>
                    </ul>
                </li>
                <li>
                    Cálculo
                    <ul>
                        <li>Límites</li>
                        <li>Derivadas</li>
                        <li>Integrales</li>
                    </ul>
                </li>
                <li>
                    Probabilidad y Estadística
                    <ul>
                        <li>Probabilidades</li>
                        <li>Distribuciones estadísticas</li>
                        <li>Teoría de la probabilidad</li>
                    </ul>
                </li>
            </ul>
        </section>
    </main>
</body>
</html>
