@extends ('base')

@section('content')
    <title>Contact</title>

    <style>
      
        body{
            background-color: white;
        }

        h3{
            font-size: 25px;
            text-align: center;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input, textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
            color:black;
        }

        button {
            background-color: #4caf50;
            color: white;
            padding: 10px 15px;
            border: none;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }

        .map-container {
            position: relative;
            overflow: hidden;
            padding-bottom: 30%; /* Aspect ratio 16:9 */
            height: 0;
            margin-top: 20px;
        }

        .map-container iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        .footer{
            background-color: #232323;
        }

        table {
            width: 25%;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        .button2{
            background-color: #ffffff;
            cursor: pointer;
            font-size: 15px;
            color: white;
        }
    </style>
</head>
<body>

    <h2>Contactez-nous</h2>
    <br>
    <br>
    <h2>Horaires d'ouverture</h2>
    <table>
        <tr>
            <th>Jour</th>
            <th>Heures d'ouverture</th>
        </tr>
        <tr>
            <td>Lundi</td>
            <td>11:00 - 22:30</td>
        </tr>
        <tr>
            <td>Mardi</td>
            <td>11:00 - 22:30</td>
        </tr>
        <tr>
            <td>Mercredi</td>
            <td>11:00 - 22:30</td>
        </tr>
        <tr>
            <td>Jeudi</td>
            <td>11:00 - 22:30</td>
        </tr>
        <tr>
            <td>Vendredi</td>
            <td>11:00 - 22:30</td>
        </tr>
        <tr>
            <td>Samedi</td>
            <td>11:00 - 20:00</td>
        </tr>
        <tr>
            <td>Dimanche</td>
            <td>Fermé</td>
        </tr>
    </table>
    <h2>Coordonnées</h2>
    <p>Téléphone : +33 6 00 00 00 00</p>
    <p>Adresse :  5 Bd Louis XIV, 59800 Lille</p>

    <label for="Réserver"></label>
    <button class="button2"> <a href="http://127.0.0.1:8000/reservation">Réserver</a></button>

    <h2>Localisation</h2>

    <div class="map-container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2530.9155085815664!2d3.067824011726027!3d50.62868637439658!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c2d58d87da5f2d%3A0x739db98176c2b59d!2s5%20Bd%20Louis%20XIV%2C%2059800%20Lille!5e0!3m2!1sfr!2sfr!4v1702034509770!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <h3>Une question ?</h3>
    <br>
    <br>
    <form action="#" method="post">
        <label for="name">Nom :</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Email :</label>
        <input type="email" id="email" name="email" required>

        <label for="phone">Téléphone :</label>
        <input type="tel" id="phone" name="phone">

        <label for="message">Message :</label>
        <textarea id="message" name="message" rows="4" required></textarea>
        
        <button type="submit">Envoyer</button>
    </form>

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
</body>
</html>


@endsection