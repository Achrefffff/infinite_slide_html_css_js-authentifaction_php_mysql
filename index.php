<?php
session_start();


if (!isset($_SESSION['user'])) {
    
    header('Location: login.html');
    exit();
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projet Web - Slider et Menu Burger</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

    <!-- Menu Burger -->
   <header>
    <nav>
        <div class="burger">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
        <!--  menu  desktop -->
        <ul class="nav-links">
            <li><a href="#">ACCUEIL</a></li>
            <li><a href="#">SERVICES</a></li>
            <li><a href="#">ACTUALITES</a></li>
            <li><a href="#">CONTACT</a></li>
        </ul>
        
        <div class="header-text">
            GÉNIECLIM FRANCE <br> La référence de la rénovation globale énergétique
        </div>
    </nav>
    
    <h5 class="mobile-hidden">GÉNIECLIM FRANCE <br> La référence de la rénovation globale énergétique</h5>
</header>

    <!-- Slider -->
    <div class="slider">
        <div class="slide-track">
            <div class="slide">
                <img src="https://www.genieclimfrance.fr/images/logo-h.jpg" height="160" width="250" alt="Logo Génieclim France" />
            </div>
            <div class="slide">
                <img class="rond" src="https://www.genieclimfrance.fr/images/medal.png"  alt="Médaille" />
                <p class="caption">Des <strong>professionnels qualifiés</strong>   à votre écoute</p>
            </div>
            <div class="slide">
                <img class="rond" src="https://www.genieclimfrance.fr/images/location.png"  alt="Localisation" />
                <p class="caption"> <strong>Intervention</strong>  dans toute la <strong>France</strong> </p>
            </div>
            <div class="slide">
                <img class="rond" src="https://www.genieclimfrance.fr/images/building.png"  alt="Bâtiment" />
                <p class="caption">Subvention des <strong>pollueurs / payeurs</strong> </p>
            </div>
            <div class="slide">
                <img class="rond" src="https://www.genieclimfrance.fr/images/euro-sign.png"  alt="Symbole Euro" />
                <p class="caption">Pose complète pour <strong> 1€*</strong><br>(*sous réserve éligibilité)</p>
            </div>
            <!-- duplication des img  pour un défilement continu  -->
            <div class="slide">
                <img src="https://www.genieclimfrance.fr/images/logo-h.jpg" height="160" width="250" alt="Logo Génieclim France" />
            </div>
            <div class="slide">
                <img class="rond" src="https://www.genieclimfrance.fr/images/medal.png" alt="Médaille" />
                <p class="caption">Des professionnels qualifiés à votre écoute</p>
            </div>
            <div class="slide">
                <img class="rond" src="https://www.genieclimfrance.fr/images/location.png" alt="Localisation" />
                <p class="caption">Intervention dans toute la France</p>
            </div>
            <div class="slide">
                <img class="rond" src="https://www.genieclimfrance.fr/images/building.png" alt="Bâtiment" />
                <p class="caption">Subvention des pollueurs / payeurs</p>
            </div>
            <div class="slide">
                <img class="rond" src="https://www.genieclimfrance.fr/images/euro-sign.png" alt="Symbole Euro" />
                <p class="caption">Pose complète pour 1€*<br>(*sous réserve éligibilité)</p>
            </div>
        </div>
    </div>

    <!-- Bouton de déconnexion -->
    <form action="php/logout.php" method="POST">
        <button type="submit">Se déconnecter</button>
    </form>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="assets/js/script.js"></script>
</body>
</html>
