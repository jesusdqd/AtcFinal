<head>
    <link rel="stylesheet" href="{{ asset('css/Cursor/cursor.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Registros-Sesion/Registros.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <div class="form-container">
        <p class="title">Inicio de Sesión</p>
        <form method="POST" action="{{ route('login') }}" class="form">
            @csrf
            <div class="input-group">
                <label for="username">Usuario</label>
                <input type="text" name="usuario" id="username" placeholder="Usuario" required>
            </div>
            <div class="input-group">
                <label for="password">Contraseña</label>
                <input type="password" name="password" id="password" placeholder="Contraseña" required>
                <div class="forgot">
                    <a rel="noopener noreferrer" href="#">¿Olvidaste la contraseña?</a>
                </div>
            </div>
            <button type="submit">
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
                    <span>Iniciar sesión</span>
                </div>
            </button>
    
            @if($errors->any())
                <div class="error">
                    <p>{{ $errors->first('error') }}</p>
                </div>
            @endif
    
        </form>
        <p class="signup">¿Aún no tiene cuenta?
            <a rel="noopener noreferrer" href="{{ route('register') }}">Registrarse aquí</a>
        </p>
    </div>    
</body>
