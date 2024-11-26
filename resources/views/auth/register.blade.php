
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="{{ asset('css/Registros.css') }}">
</head>
<body>
    <div class="login-container">
        <div class="login-box active">
            <h2>Registrarse</h2>

            <form method="POST" action="{{ route('register') }}">
                @csrf
                <input type="text" name="usuario" placeholder="Usuario" required>
                <input type="email" name="email" placeholder="Correo electrónico" required>
                <input type="password" name="contrasena" placeholder="Contraseña" required>
                <input type="password" name="contrasena_confirmation" placeholder="Confirmar Contraseña" required>
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
</html>
