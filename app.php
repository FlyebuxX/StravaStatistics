<?php

$title = 'Application';
require 'components/header.php';
require 'components/navbar.php';

?>

<body>
    <div id="container">

        <div class="sections">

            <h1 class="important-title">Vos Sports Préférés</h1>

            <section class="section first">
                <img src="img/run.png" alt="run" class="image run">
                <div class="overlay">
                    <div class="text">
                        <a href="cap.php">Course à pied</a>
                    </div>
                </div>
            </section>

            <section class="section second">
                <img src="img/bike.jpg" alt="bike" class="image bike">
                    <div class="overlay">
                        <div class="text">
                            <a href="bike.php">Vélo</a>
                        </div>
                    </div>
            </section>

            <section class="section third">
                <img src="img/hike.jpg" alt="hike" class="image hike">
                    <div class="overlay">
                        <div class="text">
                            <a href="hike.php">Randonnée</a>
                        </div>
                    </div>
            </section>

            <section class="section fourth">
                <img src="img/workout.png" alt="hike" class="image workout">
                    <div class="overlay">
                        <div class="text">
                            <a href="other_sports.php">Divers Sports</a>
                        </div>
                    </div>
            </section>
            
        </div>


    </div>
</body>

<?php
    require 'components/footer.php';
?>