<head>
    <link rel="stylesheet" href="{{ asset('css/Cursor/cursor.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Registros-Sesion/Registros.css') }}">
</head>
<body>
    <div class="form-container">
        <p class="title">Registrarse</p>
        <form method="POST" action="{{ route('register') }}" class="form">
            @csrf
            <div class="input-group">
                <label for="username">Usuario</label>
                <input type="text" name="usuario" id="username" placeholder="Usuario" required>
            </div>
            <div class="input-group">
                <label for="email">Correo electrónico</label>
                <input type="email" name="email" id="email" placeholder="Correo electrónico" required>
            </div>
            <div class="input-group">
                <label for="password">Contraseña</label>
                <input type="password" name="password" id="password" placeholder="Contraseña" required>
            </div>
            <button type="submit" class="register-button">
                <div class="svg-name-con">
                    <div class="svg-wrapper-1">
                        <div class="svg-wrapper">
                            <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0 0h24v24H0z" fill="none"></path>
                                <path
                                    d="M1.946 9.315c-.522-.174-.527-.455.01-.634l19.087-6.362c.529-.176.832.12.684.638l-5.454 19.086c-.15.529-.455.547-.679.045L12 14l6-8-8 6-8.054-2.685z"
                                    fill="currentColor"></path>
                            </svg>
                        </div>
                    </div>
                    <span>Registrarse</span>
                </div>
            </button>
    
            @if($errors->any())
                <div class="error">
                    <p>{{ $errors->first() }}</p>
                </div>
            @endif
        </form>
        <p class="signup">¿Ya tienes cuenta?
            <a rel="noopener noreferrer" href="{{ route('login') }}">Inicia sesión aquí</a>
        </p>
    </div>
</body>

