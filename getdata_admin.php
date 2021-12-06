<?php

$title = 'Contact';
require './components/header.php';
require './components/navbar.php';

?>

<body>
    <div class="cont">
        <?php
            echo "<h1>BDD FILMS</h1>";
            $bdd = new PDO('mysql:host=localhost;dbname=dbcinema;charset=utf8', 'root', '');

            $reponse = $bdd -> query('SELECT * FROM realisateurs');
            while ($donnees = $reponse -> fetch()) {
                echo "Id film :" . $donnees['Id_Films'] . " réalisé par:" . $donnees['Réalisateur'] . "<br>";
            }

            $reponse -> closeCursor();
        ?>
    </div>
</body>
