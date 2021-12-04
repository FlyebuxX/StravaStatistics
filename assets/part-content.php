<?php

function part_content(string $content) {
    require 'header.php';
    ?>
    
    <div class='part-content'><p><?= $content ?></p></div>
    <?php

}
