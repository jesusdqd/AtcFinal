<head>

    <link rel="stylesheet" href="{{ asset('css/Registros-Sesion/Registros.css') }}">
</head>
<body>
    <div class="login-container">
        <div class="login-box active">
            <h2>Registrarse</h2>

            <form method="POST" action="{{ route('register') }}">
                @csrf
                <input type="text" name="usuario" placeholder="Usuario" required>
                <input type="email" name="email" placeholder="Correo electrónico" required>
                <input type="password" name="password" placeholder="Contraseña" required>
                <button type="submit">REGISTRARSE</button>

                @if($errors->any())
                    <div class="error">
                        <p>{{ $errors->first() }}</p>
                    </div>
                @endif

                <div class="links">
                    <a href="{{ route('login') }}">¿Ya tienes cuenta? Inicia sesión</a>
                </div>
            </form>
        </div>
    </div>
</body>

