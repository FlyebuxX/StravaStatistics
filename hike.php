<?php
    $title = 'Randonnée';
    require 'components/header.php';
    require 'components/navbar.php';

?>

<body>
    
    <div class="sport_container">
        <h1 class="title">Voici vos activités enregistrées en Randonnée</h1>
        <?php 
            require 'assets/generate_datas.php'; 
            generate_data("Marche", "Randonnée");
        ?>
    </div>

</body>

<?php
    require 'components/footer.php';
?>