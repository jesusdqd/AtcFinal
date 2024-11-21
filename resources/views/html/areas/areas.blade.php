<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<main class="areas-main">
    <div class="Tienda">
        @php
            $areas = [
                ['name' => 'Matematicas', 'image' => 'Matematicas/Matematicas.png', 'link' => 'html/areas/Matematicas/matematicas.blade.php'],
                ['name' => 'Politica', 'image' => 'Politica/Politica.png', 'link' => 'html/areas/Politica/Politica.html'],
                ['name' => 'Arte', 'image' => 'Arte/Arte.png', 'link' => 'html/areas/Arte/Arte.html'],
                ['name' => 'Quimica', 'image' => 'Quimica/Quimica.png', 'link' => 'html/areas/Quimica/Quimica.html'],
                ['name' => 'Lectura', 'image' => 'Lectura//Lectura.png', 'link' => 'html/areas/Lectura/Lectura.html'],
                ['name' => 'Etica', 'image' => 'Etica/Etica.png', 'link' => 'html/areas/Etica/Etica.html'],
                ['name' => 'Religion', 'image' => 'Religion/Religion.png', 'link' => 'html/areas/Religion/Religion.html'],
                ['name' => 'Informatica', 'image' => 'Informatica/Informatica.png', 'link' => 'html/areas/Informatica/Informatica.html']
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