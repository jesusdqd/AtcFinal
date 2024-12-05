@extends('layouts.app')

@section('content')
<head>
    <title>Aprueba tu conocimiento</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,800;1,800&display=swap" rel="stylesheet">
</head>
<body>

    @include ('navbar.index_navbar_inferior')
    @include ('navbar.index_navbar_inferior2')
    
    <footer>
        &copy; 2024 ApruebaTuConocimiento.com – All Rights Reserved.
    </footer>
</body>
@endsection