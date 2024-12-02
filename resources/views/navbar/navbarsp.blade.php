<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/navbar/navbarsp/navbarsp.css') }}">
</head>
<nav class="navbar">
    <ul class="nav-links">
        <li class="dropdown">
            <a href="#" class="dropbtn">
                <img src="/Assets/Iconos/sombrero-de-graduacion.png" alt="Icono de Áreas" class="nav-icon">Áreas</a>
            <div class="dropdown-content">
                <a href="{{ route('areas.show', 'quimica') }}">
                    <img src="/Assets/Iconos/Areas/quimica.png" alt="Química" class="nav-icon">Química</a>
                <a href="{{ route('areas.show', 'informatica') }}">
                    <img src="/Assets/Iconos/Areas/informatica.png" alt="Informática" class="nav-icon">Informática</a>
                <a href="{{ route('areas.show', 'religion') }}">
                    <img src="/Assets/Iconos/Areas/religion.png" alt="Religión" class="nav-icon">Religión</a>
                <a href="{{ route('areas.show', 'matematicas') }}">
                    <img src="/Assets/Iconos/Areas/matematicas.png" alt="Matemáticas" class="nav-icon">Matemáticas</a>
                <a href="{{ route('areas.show', 'lectura') }}">
                    <img src="/Assets/Iconos/Areas/lectura.png" alt="Lectura" class="nav-icon">Lectura</a>
                <a href="{{ route('areas.show', 'politica') }}">
                    <img src="/Assets/Iconos/Areas/politica.png" alt="Política" class="nav-icon">Política</a>
                <a href="{{ route('areas.show', 'etica') }}">
                    <img src="/Assets/Iconos/Areas/etica.png" alt="etica" class="nav-icon">Etica</a>
                    <a href="{{ route('areas.show', 'etica') }}">
                <img src="/Assets/Iconos/Areas/arte.png" alt="arte"       class="nav-icon">Arte</a>
            </div>
        </li>
        <div class="right-links">
            <li><a href="{{ url('/') }}">
                <img src="/Assets/Iconos/Barra_Navegacion/InicioBottom.png" alt="Icono de Inicio" style="margin-right: 20px;">Inicio</a></li>
            <li><a href="{{ route('juegos') }}">
                <img src="/Assets/Iconos/Barra_Navegacion/Mando.png" alt="Icono de Juegos"
                style="margin-right: 20px;">Juegos</a></li>
            <li><a href="/Html/Navbar/Examen/examen.html">
                <img src="/Assets/Iconos/Barra_Navegacion/Examen.png" alt="Icono de Examen"
                style="margin-right: 20px;">Exámenes</a></li>
        </div>
    </ul>
</nav>