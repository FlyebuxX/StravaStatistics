<?php
    $title = 'Vélo';
    require 'components/header.php';
    require 'components/navbar.php';

?>

<body>
    
    <div class="sport_container">
        <h1 class="title">Voici vos activités enregistrées en CAP</h1>
        <?php 
            require 'assets/generate_datas.php'; 
            generate_data("Vélo", "Elliptique");
        ?>
    </div>

</body>

<?php
    require 'components/footer.php';
?>