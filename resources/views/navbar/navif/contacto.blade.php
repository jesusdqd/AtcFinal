@extends('layouts.chatboxm')

<head>
    <link rel="stylesheet" href="{{ asset('css/navbar/navif/contacto.css') }}">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Cursor/cursor.css') }}">
</head>

@include ('navbar.navbarsp')

<div class="card">
    <form action="{{ route('contacts.store') }}" method="POST" class="form">
        @csrf
        <div class="group">
            <input placeholder=" " type="text" name="name" required="">
            <label for="name">Nombre</label>
        </div>
        <div class="group">
            <input placeholder=" " type="email" id="email" name="email" required="">
            <label for="email">Email</label>
        </div>
        <div class="group">
            <textarea placeholder=" " id="comment" name="comment" rows="5" required=""></textarea>
            <label for="comment">Mensaje</label>
        </div>
        <button type="submit">Enviar</button>
    </form>
</div>