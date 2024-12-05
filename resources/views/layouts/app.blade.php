<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ApruebaTuConocimiento </title>
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">

</head>
<body>

    @include ('navbar.index_navbar_superior')
    @include('areas.areas')
    @include('chatbox.chatbox')
    
     <div class="container">
        @yield('content')
    </div>
</body>
</html>