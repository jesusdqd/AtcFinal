<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Linkear todos los css globales -->
  
    <link rel="stylesheet" href="{{ asset('css/busqueda.css') }}">
    <link rel="stylesheet" href="{{ asset('css/areas/areas.css') }}">
    <link rel="stylesheet" href="{{ asset('css/navbar/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/index/index.css') }}">
    <link rel="stylesheet" href="{{ asset('css/chatbox/chatbox.css') }}">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('css/navbar/navif/navif.css') }}">
    <link rel="stylesheet" href="{{ asset('css/cursor/cursor.css') }}">

</head>
<body>

    @include ('navbar.indexnavup')
    @include('areas.areas')
    @include('chatbox.chatbox')
    
     <div class="container">
        @yield('content')
    </div>
    <!-- Barra de búsqueda en el archivo layouts/app.blade.php o la vista donde se encuentra el encabezado -->
<!-- Barra de búsqueda en el archivo layouts/app.blade.php o la vista donde se encuentra el encabezado -->
<form action="{{ route('buscar') }}" method="get">
    <input type="text" name="search" placeholder="Buscar tema o subtema" required>
    <button type="submit">Buscar</button>
</form>


</body>
</html>