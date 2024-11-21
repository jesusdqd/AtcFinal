<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chatbox</title>
    <link rel="stylesheet" href="{{ asset('assets/css/chatbox.css') }}">
</head>
<body>
    <!-- Botón flotante -->
    <input type="checkbox" id="toggle-chat" class="toggle-chat" aria-hidden="true">
    <label for="toggle-chat" class="chat-button" aria-label="Abrir chat">
        <img src="{{ asset('assets/Iconos/Barra_Navegacion/Chatbox.png') }}" alt="Chatbox Icono">
    </label>

    <!-- Nueva card del chat -->
    <div class="card chatbox">
        <div class="chat-header">
            Chat
            <label for="toggle-chat" class="close-chatbox" aria-label="Cerrar chat">×</label>
        </div>
        <div class="chat-window">
            <ul class="message-list">
                <li>¡Hola! Bienvenido a APRUEBA TU CONOCIMIENTO, una plataforma de aprendizaje con el objetivo de mejorar tus capacidades en el mundo del conocimiento, con dinamicas diferentes como competir con otros jugadores en juegos variados por una tabla de ranking para saber quien conoce más de un area/tema/subtema. ¿Quieres ser el primero en esta tabla? estudia más que tus competidores y se la persona con el mayor conocimiento de la plataforma y del ¡MUNDO!</li>
            </ul>
        </div>
        <div class="chat-input">
            <input type="text" class="message-input" placeholder="Escribe tu mensaje aquí" aria-label="Escribe tu mensaje">
            <button class="send-button">Enviar</button>
        </div>
    </div>
</body>
</html>
