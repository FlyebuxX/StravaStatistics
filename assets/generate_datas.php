<?php

    function generate_data(string $sport1, string $sport2) {

        $file = fopen("data.txt", "r");

        /*Si on a réussi à ouvrir le fichier*/
        if ($file)
        {
            echo "<table>";
            /*Tant que l'on est pas à la fin du fichier*/
            while (!feof($file))
            {
                /*On lit la ligne courante*/
                $snippet = fgets($file);
                /*On l'affiche*/
                if (strpos($snippet, $sport1) !== FALSE or strpos($snippet, $sport2) !== FALSE) {
                    echo "<tr>";
                    $array = explode(';', $snippet);
                    foreach(array_slice($array, 0, -1) as $elt) {
                        echo "<td>" . $elt . "</td>";
                    }
                    echo "</tr>";
                } else if (strpos($snippet, "Sport") !== FALSE) {
                    echo "<tr>";
                    $array = explode(';', $snippet);

                    foreach(array_slice($array, 0, -1) as $elt) {
                        echo "<td class=\"app-title\">" . $elt . "</td>";
                    }
                }
    
    
            }
            /*On ferme le fichier*/
            fclose($file);
            echo "</table>";
        }
    }
    
    
    ?>