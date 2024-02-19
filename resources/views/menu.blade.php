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
                    <li class="CASE">
                        <div class="plat-nom">
                            <a href="{{route('main.plat', ['id'=> $plat->id])}}" class="image-plat">
                                <img class ="IMAGES" src="{{ asset('Image/' . $plat->fichier) }}" alt="{{ $plat->nom }}" /></a>
                                <a href="{{route('main.plat', ['id'=> $plat->id])}}" class="image-plat">
                                    <div class="DIV_1">
                                    <h4 class="plat2">{{ $plat->nom }}</h4></a>
                                    <span class="prix">{{ $plat->prix }}€</span> 
                                </div>
                                <div class="DIV_2">
                            <ul class="ETIQUETTES_2">
                            @foreach ($plat->etiquettes() as $etiquette)
                        <li class="etiquette">{{$etiquette->nom}}</li>
                        @endforeach
                    </ul>
                    </li>
                        @endforeach
                </ul>
            </div>
        </div>
        @endforeach

    </section>
@endsection
