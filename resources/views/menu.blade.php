@extends('base')

@section('content')
@section('title', 'menu')
<link rel="stylesheet" href="{{ asset('ressources/css/menu.css') }}">
<section class="body_menu">
    <h2 class="Menu_1_1">Menu</h2>
    @foreach ($categories as $categorie)
        <div class="categorie">
            
            <h3 class="H3">{{ $categorie->nom }}</h3>
            <ul class="plats">
                @foreach ($categorie->plats() as $plat)
                <div>
                    <a href="{{ route('main.plat', ['id' => $plat->id]) }}" class="image-plat">
                    <img class ="IMAGES" src="{{ asset('Image/' . $plat->fichier) }}"
                        alt="{{ $plat->nom }}" /></a>
                        <div>{{ $plat->nom }}</div>
                        <div class="prix">{{ $plat->prix }}€</div>
                        <ul class="ETIQUETTES_2">
                            @foreach ($plat->etiquettes() as $etiquette)
                                <li class="etiquette">{{ $etiquette->nom }}</li>
                            @endforeach
                        </ul>
                </div>
                
                @endforeach
            </ul>
        </div>
        </div>
    @endforeach
    <footer>
    <div class="footer">
        <p>© Copyright 2024 O'CNAMO</p>
        <li>Mentions légales</li>
        <li>Langue | FR</li>
        <li> <a href="http://127.0.0.1:8000/contact" class="contact">Contactez-nous</a></li>

        <ul>Réseaux sociaux
            <div class="reseau">
                <a href="https://www.tiktok.com/fr/"><img src="image\tiktok.jpg"class="tiktok"></a>
                <a href="https://www.instagram.com"><img src="image\Insta.jpg"class="insta"></a>
                <a href="https://www.facebook.com/?locale=fr_FR"><img src="image\facebook.jpg"class="facebook">
        </ul></a>
    </div>
</footer>
</section>

@endsection
