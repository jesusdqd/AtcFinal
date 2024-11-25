@extends('html.layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aprueba tu conocimiento</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,800;1,800&display=swap" rel="stylesheet">
</head>
<body>
  
    <div class="footer">
            <p>Este proyecto se basa en una página web en la cual puedas probar, desafiar y mejorar tus límites y conocimientos a través de exámenes, juegos, quiz, etc. Al entrar por primera vez a nuestra pagina te encontraras con la posibilidad de iniciar sesión con la plataforma que quieras ya sea Google, Facebook, etc para que tengas total libertad de invitar e incluso desafiar a tus amigos, al iniciar sesión verás una amplia variedad de áreas o materias entre ellas matemáticas, biología, arte, política, informática, etc tendrás la posibilidad de escoger tu respectivo nivel o grado de dificultad la cual se ajusta adecuadamente a todas las categorías a escoger, ademas contaras con una IA la cual se encargará de evaluar tu conocimiento ya sea a través de porcentajes o mediante aprobado o reprobado, aparte de la posibilidad de hacerle preguntas de las dudas que tengas por resolver. En nuestro sitio web hay distintos tipos de juegos para entrenar tu conocimiento entre los cuales se encuentran: sopa de letras, crucigramas, verdadero o falso,juegos de memoria, juego del ahorcado, etc. Para motivarte más a desafiarte a ti y a tus amigos agregaremos una tabla de ranking en la cual podrás luchar por entrar entre los más inteligentes de nuestra plataforma.
            </p>  
    </div>
        <main>
        <footer>
    <div class="footer-container">
        <div class="footer-content">
            <div class="footer-links-container">
                <div class="footer-links">
                <a href="{{ route('navbar.navif.novedades') }}" class="footer-link">
                    <img src="{{ asset('Assets/Iconos/Barra_Navegacion/Novedades.png') }}" alt="Icono de Novedades">
                    NOVEDADES
                </a>
                    <a href="{{ route('navbar.navif.contacto') }}" class="footer-link">
                        <img src="{{ asset('Assets/Iconos/Barra_Navegacion/Contacto.png') }}" alt="Icono de Contacto">
                        CONTACTO
                </a>
                    <a href="{{ route('navbar.navif.reseñas') }}" class="footer-link">
                        <img src="{{ asset('Assets/Iconos/Barra_Navegacion/Reseñas.png') }}" alt="Icono de Reseñas">
                        RESEÑAS
                </a>
                </div>
            </div>
        </div>
    </div>
</footer>
</body>
</html>
@endsection
