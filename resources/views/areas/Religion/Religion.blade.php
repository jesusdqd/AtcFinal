@extends('layouts.chatboxm')

<head>
    <link rel="stylesheet" href="{{ asset('css/areas/religion/religion.css') }}">
    <link rel="stylesheet" href="{{ asset('css/cursor/cursor.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,800;1,800&display=swap" rel="stylesheet">
</head>

<body>
    @include('navbar.navbarsp')

    <main>
        <h1>BIENVENIDOS AL AREA DE RELIGION</h1>
    </main>

    @section('content')
    <div class="container">
        <h1>Área de Religión</h1>

        <!-- Breve descripción del área de religión -->
        <p>
            En esta sección exploraremos los aspectos fundamentales de diversas religiones a lo largo de la historia, incluyendo sus creencias, prácticas y su influencia en la cultura y la sociedad. Los temas abordan desde los orígenes del cristianismo y el islam, hasta las religiones indígenas y las interacciones entre religión y ciencia. ¡Comencemos el viaje hacia el entendimiento de la espiritualidad humana!
        </p>

        <div class="temas">
            <!-- Tema 1: Historia de las religiones -->
            <div class="tema">
                <h2>Historia de las religiones</h2>
                <ul>
                    <li><a href="#">Orígenes de las religiones</a></li>
                    <li><a href="#">Religiones antiguas</a></li>
                    <li><a href="#">El surgimiento del monoteísmo</a></li>
                </ul>
            </div>

            <!-- Tema 2: Cristianismo -->
            <div class="tema">
                <h2>Cristianismo</h2>
                <ul>
                    <li><a href="#">La vida y enseñanzas de Jesús</a></li>
                    <li><a href="#">Los evangelios y los apóstoles</a></li>
                    <li><a href="#">Principales ramas del cristianismo: Catolicismo, Protestantismo y Ortodoxia</a></li>
                    <li><a href="#">El concepto de salvación en el cristianismo</a></li>
                </ul>
            </div>

            <!-- Tema 3: Islam -->
            <div class="tema">
                <h2>Islam</h2>
                <ul>
                    <li><a href="#">Los pilares del Islam</a></li>
                    <li><a href="#">El Corán y los Hadices</a></li>
                    <li><a href="#">El Profeta Mahoma y su vida</a></li>
                    <li><a href="#">El concepto de Yihad</a></li>
                </ul>
            </div>

            <!-- Tema 4: Judaísmo -->
            <div class="tema">
                <h2>Judaísmo</h2>
                <ul>
                    <li><a href="#">Los patriarcas del judaísmo</a></li>
                    <li><a href="#">La Torá y los profetas</a></li>
                    <li><a href="#">La historia del pueblo judío</a></li>
                    <li><a href="#">El concepto de Mesías en el judaísmo</a></li>
                </ul>
            </div>

            <!-- Tema 5: Otras religiones -->
            <div class="tema">
                <h2>Otras religiones</h2>
                <ul>
                    <li><a href="#">Hinduismo: Dioses y creencias principales</a></li>
                    <li><a href="#">Budismo: El camino hacia la iluminación</a></li>
                    <li><a href="#">Sijismo: Principales enseñanzas y creencias</a></li>
                    <li><a href="#">Religiones indígenas y sus creencias</a></li>
                </ul>
            </div>

            <!-- Tema 6: Ética religiosa -->
            <div class="tema">
                <h2>Ética religiosa</h2>
                <ul>
                    <li><a href="#">El concepto de moral en las religiones</a></li>
                    <li><a href="#">Los 10 Mandamientos</a></li>
                    <li><a href="#">El Sermón de la Montaña</a></li>
                    <li><a href="#">La ley islámica (Sharia)</a></li>
                </ul>
            </div>

            <!-- Tema 7: Religión y ciencia -->
            <div class="tema">
                <h2>Religión y ciencia</h2>
                <ul>
                    <li><a href="#">El origen del universo y las religiones</a></li>
                    <li><a href="#">Evolución y creación</a></li>
                    <li><a href="#">Ciencia y fe: ¿conflicto o complementación?</a></li>
                </ul>
            </div>

            <!-- Tema 8: La religión en la actualidad -->
            <div class="tema">
                <h2>La religión en la actualidad</h2>
                <ul>
                    <li><a href="#">Religión y política</a></li>
                    <li><a href="#">La libertad religiosa en el mundo moderno</a></li>
                    <li><a href="#">El papel de la religión en la sociedad actual</a></li>
                </ul>
            </div>
        </div>
    </div>
    @endsection
</body>
</html>
