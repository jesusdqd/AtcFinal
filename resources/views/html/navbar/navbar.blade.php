<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Página</title>
    <img src="{{ asset('Assets/Banner.png') }}" alt="Descripción de la imagen">
</head>
<body>

    <nav>
    <ul class="nav-links">
        <li><a href="#Inicio">
            <img src="{{ asset('Assets/Iconos/Barra_Navegacion/InicioBottom.png') }}" alt="Icono de Inicio">Inicio</a></li>
        <li><a href="#examen">
            <img src="{{ asset('Assets/Iconos/Barra_Navegacion/Examen.png') }}" alt="Icono de Examen">Examen</a></li>
        <li><a href="#Ranking">
            <img src="{{ asset('Assets/Iconos/Barra_Navegacion/Trofeo.png') }}" alt="Icono de Ranking">Ranking</a></li>
        <li><a href="#juegos">
            <img src="{{ asset('Assets/Iconos/Barra_Navegacion/Mando.png') }}" alt="Icono de Juegos">Juegos</a></li>
    </ul>

    <div class="search-container">
        <div class="search-border">
            <span class="search-icon">
                <img src="{{ asset('Assets/Iconos/Barra_Navegacion/Busqueda.png') }}" alt="Icono de búsqueda">
            </span>
            <input type="text" class="search-input" placeholder="Buscar...">
        </div>
    </div>
</nav>
</body>
</html>