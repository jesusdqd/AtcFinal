@extends('layouts.chatboxm')

<head>
    <link rel="stylesheet" href="{{ asset('css/navbar/navif/novedades.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Cursor/cursor.css') }}">
</head>

@include ('navbar.navbarsp')

@section('title', 'Novedades')

@section('content')
    <div class="novedades-container">
        <h1>NOVEDADES: 26/11/2024</h1>

        <!-- Sección de Materias -->
        <section class="novedades-materias">
            <h2>Nuevas Materias Agregadas</h2>
            <ul>
                <li>
                    <strong>Química:</strong> Se ha añadido contenido que incluye fórmulas, reacciones químicas y tablas periódicas, ideal para estudiantes de secundaria y universidad.
                </li>
                <li>
                    <strong>Informática:</strong> Esta materia abarca conceptos básicos de programación, lógica computacional y el uso de herramientas digitales.
                </li>
                <li>
                    <strong>Matemáticas:</strong> Ahora incluye temas como álgebra, geometría y cálculo diferencial, fortaleciendo así el aprendizaje.
                </li>
                <li>
                    <strong>Religión:</strong> Proporciona una visión integral de diversas religiones, sus creencias y su impacto en la cultura y la sociedad.
                </li>
                <li>
                    <strong>Ética:</strong> Se centra en los principios morales, la toma de decisiones éticas y la aplicación de valores en la vida diaria y profesional.
                </li>
                <li>
                    <strong>Lectura:</strong> Desarrolla habilidades de comprensión lectora, análisis crítico de textos y mejora del vocabulario.
                </li>
                <li>
                    <strong>Política:</strong> Aborda temas sobre sistemas políticos, estructuras gubernamentales y la importancia de la participación ciudadana.
                </li>
                <li>
                    <strong>Física:</strong> Cubre conceptos fundamentales como las leyes del movimiento, energía, electromagnetismo y termodinámica.
                </li>
            </ul>
            <p>
                Estas materias se han agregado en respuesta al interés creciente de los usuarios por áreas técnicas y científicas que complementen su formación académica, así como temas relacionados con el desarrollo personal y el análisis crítico de la sociedad.
            </p>
        </section>

        <!-- Sección de Juegos -->
        <section class="novedades-juegos">
            <h2>Nuevo Juego Agregado</h2>
            <ul>
                <li>
                    <strong>Quiz Rápido:</strong> Responde 10 preguntas en el menor tiempo posible para ganar puntos y subir en el ranking.
                </li>
            </ul>
            <p>
                Este juego está diseñado para hacer el aprendizaje más dinámico y entretenido, motivando a los usuarios a reforzar sus conocimientos mientras se divierten.
            </p>
        </section>

        <section class="novedades-otras">
            <h2>Otras Actualizaciones</h2>
            <ul>
                <li>Se ha agregado un chatbox para soporte y preguntas frecuentes.</li>
                <li>Mejoras en el diseño y navegación del sitio para hacerlo más intuitivo y accesible.</li>
            </ul>
            <p>
                Estas mejoras se han implementado basándose en la retroalimentación de los usuarios, con el objetivo de ofrecer una experiencia más amigable y completa.
            </p>
        </section>
    </div>
@endsection