@extends('base')

@section('content')
<section class="section_class_img">
    <div class="class_img">
    <img class="class_img_2" src="{{ asset('image/'.$plat->fichier) }}" alt="{{ $plat->nom }}" />
    <h2>{{ $plat->nom }}</h2>
    <span class="prix">{{ $plat->prix }} eur</span>
    <ul>
        @foreach ($plat->etiquettes() as $etiquette)
            <li>{{ $etiquette->nom }}</li>
        @endforeach
    </ul>
    </div>
</section>
@endsection