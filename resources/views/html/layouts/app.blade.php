<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Linkear todos los css globales -->
    <link rel="stylesheet" href="{{ asset('css/areas/areas.css') }}">
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('css/chatbox.css') }}">
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
    <link rel="stylesheet" href="{{ asset('css/navbar-if.css') }}">

</head>
<body>

    <!-- Incluir todo el contenido comun -->
    @include ('html.navbar.navbar')
    @include('html.areas.areas')
    @include('html.chatbox.chatbox')
  

    <!-- Aquí va el contenido específico de cada página -->
     <div class="container">
        @yield('content')
    </div>
    
</body>
</html>