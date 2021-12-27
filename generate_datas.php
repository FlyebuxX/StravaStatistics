<?php
    $file = fopen("data.txt", "r");

    /*Si on a réussi à ouvrir le fichier*/
    if ($file)
    {
        echo "<table>";
        /*Tant que l'on est pas à la fin du fichier*/
        while (!feof($file))
        {
            /*On lit la ligne courante*/
            $buffer = fgets($file);
            /*On l'affiche*/
            if (strpos($buffer, 'course') !== FALSE or strpos($buffer, 'Activité') !== FALSE) {
                echo "<tr>";
                $array = explode(';', $buffer);
                foreach($array as $elt) {
                    echo "<td>" . $elt . "</td>";
                }
                echo "</tr>";
            }
        }
        /*On ferme le fichier*/
        fclose($file);
        echo "</table>";
    }
