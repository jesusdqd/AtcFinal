@extends('layouts.chatboxm')

<head>
    <link rel="stylesheet" href="{{ asset('css/ranking.ranking.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Cursor/cursor.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>

@section('content')

@include ('navbar.navbarsp')

  
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4">Ranking</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Puntos</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($ranking as $index => $user)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->puntos }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
