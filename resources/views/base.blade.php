<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }} ">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }} - @yield('title')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/css/menu.css', ])
</head>

<body>
    <nav class="menu-container">
        <!-- burger menu -->
        <input type="checkbox" aria-label="Toggle menu" />
        <span></span>
        <span></span>
        <span></span>
    
        <!-- logo -->
        <a href="#" class="menu-logo">
            <img src="image\logo.png" alt="">
        </a>
        <div class="menu">
            <ul>
                    <li>
                        <a href="{{ route('main.home') }}">Accueil</a>
                    </li>
                    <li>
                        <a href="{{ route('main.menu') }}">Menu</a>
                    </li>
                    <li>
                        <a href="{{ route('main.contact') }}">Contact</a>
                    </li>
                    <li>
                        <a href="{{ route('main.reservation') }}">Reservation</a>
                    </li>
            </ul>
        </div>
        </nav>
</body>

@yield('content')
    