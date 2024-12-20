@extends('layouts.chatboxm')

<head>
    
    <link rel="stylesheet" href="{{ asset('css/areas/quimica/quimica.css') }}">
    <link rel="stylesheet" href="{{ asset('css/cursor/cursor.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,800;1,800&display=swap" rel="stylesheet">
</head>

    @include ('navbar.navbarsp')

    <main>
        <div class="content">
            <h1>Bienvenidos al Área de Química</h1>
            <p class="descripcion">
                La Química es una ciencia que estudia la composición, estructura, propiedades y transformaciones de la materia. 
                Es fundamental para entender los procesos que ocurren en el mundo natural y en diversas áreas aplicadas como 
                la medicina, la ingeniería, la biología y la tecnología. En esta área aprenderás conceptos clave como la 
                estructura atómica, las reacciones químicas y la tabla periódica.
            </p>

            <div class="subtopics">
                <h2>Temas y Subtemas de Química</h2>
                <ul>
                    <li class="dropdown">
                        <a href="#">Átomos y Elementos</a>
                        <div class="dropdown-content">
                            <a href="#">Estructura Atómica</a>
                            <a href="#">Propiedades de los Elementos</a>
                            <a href="#">Modelo Atómico</a>
                        </div>
                    </li>
                    <li class="dropdown">
                        <a href="#">Reacciones Químicas</a>
                        <div class="dropdown-content">
                            <a href="#">Tipos de Reacciones</a>
                            <a href="#">Ley de Conservación de la Masa</a>
                        </div>
                    </li>
                    <li class="dropdown">
                        <a href="#">Tabla Periódica</a>
                        <div class="dropdown-content">
                            <a href="#">Grupos y Períodos</a>
                            <a href="#">Elementos Químicos</a>
                        </div>
                    </li>
                    <li class="dropdown">
                        <a href="#">Combinación Química</a>
                        <div class="dropdown-content">
                            <a href="#">Formación de Compuestos</a>
                            <a href="#">Balanceo de Ecuaciones</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </main>

