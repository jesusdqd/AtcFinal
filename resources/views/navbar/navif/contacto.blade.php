@extends('layouts.chatboxm')

<head>
    <link rel="stylesheet" href="{{ asset('css/navbar/navif/contacto.css') }}">
    <link rel="stylesheet" href="{{ asset('css/cursor.css') }}">
</head>

@include ('navbar.navbarsp')

<div class="container">
    <div class="form-container">
        <h2>Contacto</h2>

        <form action="{{ route('contacto.submit') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Nombre</label>
                <input type="text" id="name" name="name" required placeholder="Ingresa tu nombre">
            </div>

            <div class="form-group">
                <label for="email">Correo Electrónico</label>
                <input type="email" id="email" name="email" required placeholder="Ingresa tu correo">
            </div>

            <div class="form-group">
                <label for="message">Mensaje</label>
                <textarea id="message" name="message" required placeholder="Escribe tu mensaje aquí" rows="5"></textarea>
            </div>

            <button type="submit">Enviar Mensaje</button>
        </form>
    </div>
</div>