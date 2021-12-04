<?php

    $title = 'Accueil';
    require './components/header.php';
    require './components/navbar.php';

?>

<body>

    <div id="particles-js">
        <div class="top_page">
            <div class="banner">
                <img src="img/sport-banner.svg" alt="sport-banner" class="banner-img">
            </div>
                <div class="banner-titles">
                    <h1 class="important-title">Strava Statistics</h1>
                    <h2 class="snd-title">Bien plus que du sport</h2>
                </div>
        </div>
        <button class="getStarted-button"><a href="app.php" class="getSarted-button-link">Je teste l'application</a></button>

        <div class="bottom_page">
            <div class="container">
                <section>
                    <img src="img/stats.svg" alt="stats-view">
                    <p class="landing-text">Consultez les statistiques de vos séances en toute simplicité</p>
                </section>

                <section>
                    <img src="img/security.svg" alt="security">
                    <p class="landing-text">Profitez d'une interface entièrement sécurisée</p>
                </section>

                <section>
                    <img src="img/progression.svg" alt="progression-view">
                    <p class="landing-text">Visualisez vos progrès et planifiez vos entraînements</p>
                </section>
            </div>
        </div>

        <div class="bottom_blocks">
            <div class="get-access">
                <h1 class="get-access-title">Inscrivez-vous maintenant</h1>
                <p class="get-access-paragraph">
                    Cela prend seulement quelques minutes pour créer un compte et commencer une nouvelle aventure.<br>Si vous avez des questions, n'hésitez pas à contacter notre équipe support.
                </p>
                <div class="emails-entering">
                    <div class="left-part">
                        <input type="email" placeholder="email@example.com" class="email-input">
                    </div>
                    
                    <div class="right-part">
                        <button class="get-started-button">S'inscire gratuitement</button>
                        <p><a href="connexion.html">Déjà inscrit ?</a></p>
                    </div>
                </div>
            </div>
    </div>
    
    <?php require 'components/footer.php' ; ?>
    