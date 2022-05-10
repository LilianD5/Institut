<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;500;600&family=Dancing+Script:wght@400;500;600&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;1,100;1,200;1,300;1,400;1,500&display=swap" rel="stylesheet">
    <link rel="icon" size="16x16" type="image/png" href="./img/icone/icon.png">
    <link rel="stylesheet" href="style.css">
    <title>Beauty & Soul | Salon de beauté à Lyon 6ème</title>
</head>

<body>
    <header>

        <div class="row-limit-size flex-between">

            <!-- Menu -->

            <nav class="nav-1 flex-between">
                <ul class="main-menu flex-between">
                    <li><a href="#visage">Visage</a></li>
                    <li><a href="#corps">Corps</a></li>
                </ul>
            </nav>
            <h1 id="h1-menu"><a href="#">Beauty & Soul</a></h1>
            <nav class="nav-2 flex-between">
                <ul class="main-menu flex-between">
                    <li><a href="#massage">Massage</a></li>
                    <li><a href="#promotion">Promotion</a></li>
                </ul>
            </nav>

            <!-- Fin Menu -->

            <!-- Menu Burger -->

            <div id="icone-burger"><img src="./img/icone/burgerM.png" alt="menu déroulant"></div>
            <nav id="menu-b" class="burger-menu">
                <ul class="main-menu">
                    <li><a href="#visage">Visage</a></li>
                    <li><a href="#corps">Corps</a></li>
                    <li><a href="#massage">Massage</a></li>
                    <li><a href="#promotion">Promotion</a></li>
                </ul>
                <figure id="logo-menu" class="flex-around">
                    <img src="../img/logo1.png" alt="La logo de salon" width="250px">
                </figure>
                <div id="icone-menu" class="flex-around">
                    <img src="./img/icone/facebook.png" alt="icone facebook">
                    <img src="./img/icone/youtube.png" alt="icone youtube">
                    <img src="./img/icone/insta.png" alt="icone instagram">
                </div>
            </nav>

            <!-- Fin Menu Burger -->
        </div>

    </header>

    <!-- MAIN -->
    <main>

        <!-- Banniere -->

        <div id="banniere">
            <div class="row-limit-size flex-between">
                <div id="icone-banniere">
                    <a href="#"><img class="icone" src="./img/icone/facebook.png" alt="icone facebook class="></a>
                    <a href="#"><img class="icone" src="./img/icone/youtube.png" alt="icone youtube"></a>
                    <a href="#"><img class="icone" src="./img/icone/insta.png" alt="icone instagram"></a>
                </div>
                <p class="adresse">00 Rue Prenom Nom Lyon 6</p>
                <p class="horaires">Mardi - Vendredi : 10h-19h<br>Samedi : 9h - 20h</p>
            </div>
        </div>

        <!-- Banniere -->

        <!-- Logo -->

        <figure id="logo-main">
            <a href="#"><img src="./img/logo1.png" alt="Logo Beauty & Soul"></a>
        </figure>
        <h2 id="slogan">BEAUTY. LUXE. ELEGANCE.</h2>

        <!-- Logo -->

        <!-- Slider -->

        <div id="slider">
            <img src="./img/slider/slider1.jpg" alt="Image du slider" id="slide">
            <div id="back"><img src="./img/icone/fleche-gauche.png" alt="Bouton défilement du slider vres la gauche"></div>
            <div id="next"><img src="./img/icone/fleche-droite.png" alt="Bouton défilement du slider vres la droite"></div>
        </div>

        <!-- Fin Slider -->

        <!-- Prestation -->

        <div id="prestation">

            <!-- Bienvenue -->

            <div id="background"></div>
            <div id="welcome">
                <h3 class="titre-welcome">Bienvenue</h3>
                <p class="p-presta right font-grey">DANS NOTRE SALON DE BIEN-ETRE</p>
            </div>

            <!-- Fin Bienvenue -->

            <!-- Div Prestation-->

            <div class="article">
                <div class="img-presta"><img src="./img/contenu/bienvenue.jpg" alt="Huiles essentielles et serviettes"></div>
                <div class="text">
                    <p id="p-welcome" class="text-prestation font-grey">Bienvenue chez Beauty & Soul, votre salon d'exception dans le 6ème arrondissemnt lyonnais. Vous trouverez chez Beauty & Soul des jeunes gens passionnés et talentueux à votre service. Nous vous invitons à explorer nos services exceptionelss et nous découvrir.
                    </p>
                </div>
            </div>

            <div class="article" id="visage">
                <div class="text">
                    <h3 class="titre-presta font-dark">soin du visage</h3>
                    <p class="text-prestation font-dark">Un teint frais et healthy commence avec une peau en bonne santé.
                        Beauty & soul propose des soins visage adaptés à tous les types de peaux. Peau sensible, grasse, mixte ou sèche, faites votre choix parmi les soins, démaquillants, ou sérums qui redonneront de l'éclat à votre peau.
                    </p>
                </div>
                <div class="img-presta"><img src="./img/contenu/visage.jpg" alt="Image de soin de visage."></div>
            </div>

            <div class="article column-reverse" id="corps">
                <div class="img-presta"><img src="./img/contenu/corps.jpg" alt="Image de soin du corps."></div>
                <div class="text">
                    <h3 class="titre-presta font-grey">soin du corps</h3>
                    <p class="text-prestation font-grey">
                        Prendre soin de son corps est indispensable pour préserver toute la souplesse et l’élasticité de la peau. Nettoyant, gommage et crème hydratante, Beauty & Soul vous offre le meilleur pour prendre soin quotidiennement de votre corps. Retrouvez instantanément une peau belle, douce et soyeuse !
                    </p>
                </div>
            </div>

            <div class="article" id="massage">
                <div class="text">
                    <h3 class="titre-presta font-dark">massage</h3>
                    <p class="text-prestation font-dark">Découvrez les Massages Secrets et Personnalisés du plus beau Spa chez Beauty & Soul. Tous nos Massages sont réalisés à l'huile chaude parfumée, dans une salle de soin double et chaleureuse éclairée à la lumière des bougies. Large choix parmi: Massage Relaxant, Massage Tonifiant, Massage en Profondeur, Massage Drainant, etc...
                    </p>
                </div>
                <div class="img-presta"><img src="./img/contenu/massage.jpg" alt="Image de massages."></div>
            </div>

            <!--Fin Div Prestation-->

        </div>

        <!--Fin Prestation-->

        <!--Promo-->

        <div id="promotion">

            <h3 class="titre-promo font-dark">offre promotionnelle</h3>

            <div id="promo" class="row-limit-size flex-around">

                <div>
                    <div class="offre">
                        <img src="./img/promo/promo1.jpg" alt="coffret cadeau" class="objet-promo">
                        <img src="./img/promo/promo33.png" alt="promo -33%" class="img-promo">
                    </div>
                    <p class="titre-offre">Coffret Beauty & Soul </p>
                </div>

                <div>
                    <div class="offre">
                        <img src="./img/promo/promo2.jpg" alt="carte cadeau" class="objet-promo">
                        <img src="./img/promo/promo20.png" alt="promo -33%" class="img-promo">
                    </div>
                    <p class="titre-offre">Gift Card Beauty & Soul </p>
                </div>

                <div>
                    <div class="offre">
                        <img src="./img/promo/promo3.jpg" alt="Offre de Saint Valentin" class="objet-promo">
                        <img src="./img/promo/promo50.png" alt="promo -33%" class="img-promo">
                    </div>
                    <p class="titre-offre">Offre de la Saint Valentin<br> Massage en Duo </p>
                </div>

            </div>
        </div>

        <!--Fin Promo-->

        <div class="row-limit-size gold position-erreur">

            <h3 id="contact" class="titre-promo font-dark">contact</h3>
            <form action="#contact" method="POST" id="form">
                <label for="firstname">Prénom :</label>
                <input class="field" type="text" name="firstname" id="firstname" required>

                <br><br>

                <label for="lastname">Nom :</label>
                <input class="field" type="text" name="lastname" id="lastname" required>

                <br><br>

                <label for="mail">Mail :</label>
                <input class="field" type="email" name="mail" id="mail" required>

                <br><br>

                <label for="tel">Téléphone :</label>
                <input class="field" type="text" name="tel" id="tel" required>

                <br><br>

                <label for="message">Votre message :</label>

                <br><br>

                <textarea name="message" id="message" cols="63" rows="10"></textarea>

                <input id="send" type="submit" name="submit" value="envoyer" required>
            </form>

            <?php

            if (isset($_POST['submit'])) {

                $firstname = $_POST['firstname'];
                $lastname = $_POST['lastname'];
                $mail = $_POST['mail'];
                $tel = $_POST['tel'];

                $send = @mail(
                    'contact@salonbeaute.com',
                    'Demande de renseignement ' . $firstname . ' ' . $lastname,
                    $_POST['message'],
                    'From: ' . $_POST['mail']
                );

                if ($send) {
                    echo '<p class="send">Votre message a bien été envoyé !</p>';
                } else {
                    echo '<p class="erreur">Oops, un problème est survenue !<p/>';
                }
            }
            ?>
        </div>



    </main>


    <!-- FOOTER -->
    <footer>
        <div class="row-limit-size">
            <div class="flex-between">
                <div class="logo-footer">
                    <a href="#"><img src="./img/logo2.png" alt="la logo de l'institut"></a>
                </div>

                <p><a href="#">Beauty & Soul</a></p>

                <div class="icone-footer flex-around">
                    <a href="#"><img src="./img/icone/facebook.png" alt="icone facebook"></a>
                    <a href="#"><img src="./img/icone/youtube.png" alt="icone youtube"></a>
                    <a href="#"><img src="./img/icone/insta.png" alt="icone instagram"></a>
                </div>
            </div>

            <div id="navlist">
                <ul class="flex-between">
                    <li><a href="#">Plan du site</a></li>
                    <li><a href="#"> Mention légale</a></li>
                    <li><a href="#"> Conditions d’utilisation</a></li>
                    <li><a href="#"> Conditions générales de vente</a></li>
                    <li><a href="#"> Données personnelles et cookies</a></li>
                </ul>
            </div>
        </div>
        <p class="copy flex-center"><a href="#">Copyright © 2021. Tous droits réservés.</a></p>
    </footer>

    <script src="./main.js"></script>
</body>

</html>