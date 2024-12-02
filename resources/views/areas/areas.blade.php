<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/cursor/cursor.css') }}">
    
</head>
<main class="areas-main">
    <div class="Tienda">
        @php
            $areas = [
                ['name' => 'Matematicas', 'image' => 'Matematicas/Matematicas.png', 'link' => 'areas/Matematicas'],
                ['name' => 'Politica', 'image' => 'Politica/Politica.png', 'link' => 'areas/politica'],
                ['name' => 'Arte', 'image' => 'Arte/Arte.png', 'link' => 'areas/arte'],
                ['name' => 'Quimica', 'image' => 'Quimica/Quimica.png', 'link' => 'areas/quimica'],
                ['name' => 'Lectura', 'image' => 'Lectura//Lectura.png', 'link' => 'areas/lectura'],
                ['name' => 'Etica', 'image' => 'Etica/Etica.png', 'link' => 'areas/etica'],
                ['name' => 'Religion', 'image' => 'Religion/Religion.png', 'link' => 'areas/religion'],
                ['name' => 'Informatica', 'image' => 'Informatica/Informatica.png', 'link' => 'areas/informatica']
            ];
        @endphp

        @foreach($areas as $area)
            <a href="{{ $area['link'] }}" class="imagen {{ $area['name'] }}">
                <div class="background {{ $area['name'] }}-bg"></div>
                <img src="Assets/Areas/{{ $area['image'] }}" alt="{{ $area['name'] }}">
                <div class="container">
                    <div class="texto">
                        <p class="areastxt">{{ $area['name'] }}</p>
                    </div>
                </div>
            </a>
        @endforeach
    </div>
</main>