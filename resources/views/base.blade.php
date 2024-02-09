<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }} ">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }} - @yield('title')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
<div class="tout">
    <h1 class="titre">O CNAMO</h1>
    <ul>
        <li class="main">
            <a href="{{ route('main.accueil') }}">accueil</a>
            <a href="{{ route('main.menu') }}">menu</a>
            <a href="{{ route('main.contact') }}">contact</a>
            <a href="{{ route('main.reservation') }}">reservation</a>
        </li>
    </ul>
</div>  
</body>

@yield('content')
    