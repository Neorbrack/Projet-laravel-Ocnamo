@extends('base')

@section('title', 'Accueil')

@section('content')

    <body>
        <section class="sectionimg">


            <div class="slideshow-container">
                <div class="container">
                    <div class="slide fade">
                        <h1>O CNAMO</h1>
                        <img src="image\resto.jpg" class="a">
                    </div>
                    <div class="slide fade">
                        {{-- <h4>Venez vous régalez !</h4> --}}
                        <img src="image\a.jpg" class="aa">
                    </div>
                    <div class="slide fade">
                        {{-- <h4>Une équipe soudée !</h4> --}}
                        <img src="image\restauration.jpeg" class="aaa">
                    </div>
                    <div class="slide fade">
                        {{-- <h4>Pour une cuisine FANTASTIQUE !</h4> --}}
                        <img src="image\fiche-cuisine-min.jpg" class="aa">
                    </div>
                    <!-- Ajoutez autant de diapositives que nécessaire -->
                </div>
            </div>

            <div class=img2>
                <img src="image\platimg.jpg" class="b">
                <h2> <a href="http://127.0.0.1:8000/menu" class="hrefmenu">Menu</a>
                    <br>
                    <i>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptas fugiat laborum rem
                        dignissimos. Incidunt culpa aliquid iure aperiam, modi, nam fuga minima tempora porro
                        repudiandae quos adipisci illo, ipsa at!</i>
                </h2>
            </div>

            <div class="img3">
                <img src="image\resto3.jpg"class="c">
                <h3> <a href="http://127.0.0.1:8000/reservation" class="hrefmenu"> Réservation</a>
                    <br>
                    <i>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Illo maiores sit eveniet non amet,
                        ab tempora neque voluptatem aliquid? Deleniti, aut exercitationem quos enim veritatis cumque
                        accusamus adipisci ex voluptas.</i>
                </h3>
            </div>
            <h5>Actualités</h5>
            <div class="container1">
                <div class="actu">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi nesciunt harum reiciendis. Magni dolor quis fugiat, aliquid pariatur sapiente optio cum? Vitae porro inventore mollitia amet delectus dolorum perferendis obcaecati!</p>
                    <img src="image\resto2.jpg">
                </div>
                <div class="actu">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi nesciunt harum reiciendis. Magni dolor quis fugiat, aliquid pariatur sapiente optio cum? Vitae porro inventore mollitia amet delectus dolorum perferendis obcaecati!<p>
                    <img src="image\Droit-de-bouchon-au-restaurant.jpg">
                </div>
                <div class="actu">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati adipisci reprehenderit atque totam quasi animi quo necessitatibus natus nostrum, ea, eum voluptate non tenetur tempora nemo consequuntur excepturi laboriosam quam?</p>
                    <img src="image\Parc_JB_Lebas_Lille.Photo_Ph.BRIZARD.jpg">
                </div>
            </div>
    </body>

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

        <script src="script.js"></script>

        </div>
    </footer>
    </section>
@endsection
