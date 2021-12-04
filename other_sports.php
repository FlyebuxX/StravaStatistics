<?php
    $title = 'Sports Divers';
    require 'components/header.php';
    require 'components/navbar.php';

?>

<body>
    
    <div class="sport_container">
        <h1 class="title">Voici vos activités enregistrées pour les entraînements</h1>
        <?php 
            require 'assets/generate_datas.php'; 
            generate_data("Entraînement", "Entraînement aux poids");
        ?>
    </div>

</body>

<?php
    require 'components/footer.php';
?>