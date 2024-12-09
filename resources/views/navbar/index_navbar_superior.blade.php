<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Página</title>
    <link rel="stylesheet" href="{{ asset('css/navbar/navbar.css') }}">
</head>
<body>
    <div class="bootstrap-section">
        <div id="bannerCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('Assets/Banner.png') }}" class="d-block w-100" alt="Banner 1">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('Assets/Banner2.png') }}" class="d-block w-100" alt="Banner 2">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('Assets/Banner3.png') }}" class="d-block w-100" alt="Banner 2">
                </div>
            </div>
        </div>
    </div>

    <nav>
    <ul class="nav-links">
        <li><a href="{{ url('/') }}">
            <img src="{{ asset('Assets/Iconos/Barra_Navegacion/InicioBottom.png') }}" alt="Icono de Inicio">Inicio</a>
        </li>
        <li><a href="{{ route('examen.examen') }}">
            <img src="{{ asset('Assets/Iconos/Barra_Navegacion/Examen.png') }}" alt="Icono de Examen">Examen</a>
        </li>
        <li><a href="{{ route('juegos') }}">
            <img src="{{ asset('Assets/Iconos/Barra_Navegacion/Mando.png') }}" alt="Icono de Juegos">Juegos</a>
        </li>
        <li><a href="{{ route('ranking') }}">
            <img src="{{ asset('Assets/Iconos/Barra_Navegacion/Trofeo.png') }}" alt="Icono de Trofeo">Ranking</a>
        </li>

        @if(Auth::check())
            <li><a href="{{ route('perfil') }}">
                <img src="{{ asset('Assets/Iconos/Barra_Navegacion/Usuario.png') }}" alt="Icono de Usuario">Perfil</a>
            </li>
            <li>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn-logout">
                        <img src="{{ asset('Assets/Iconos/Barra_Navegacion/Out.png') }}" alt="Cerrar sesión">
                    </button>
                </form>
            </li>
        @else
            <li><a href="{{ route('login') }}">
                <img src="{{ asset('Assets/Iconos/Barra_Navegacion/Usuario.png') }}" alt="Icono de Usuario">Iniciar sesión</a>
            </li>
        @endif
        </ul>
    <!--
        <div class="search-container">
            <div class="search-border">
                <span class="search-icon">
                    <img src="{{ asset('Assets/Iconos/Barra_Navegacion/Busqueda.png') }}" alt="Icono de búsqueda">
                </span>

                    <input type="text" class="search-input" placeholder="Buscar..." name="query">
                </form>
            </div>
        </div>  
        
    -->
</nav>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>