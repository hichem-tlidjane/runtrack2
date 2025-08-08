<?php

// On déclare le tableau
$tab=[2000,173,2, 5, 19, 300];

// On itére les éléments du tableau pour attribuer la valeur
foreach ($tab as $value)
    {
    //  On stocke la valeur dans val1
    $val1 = $value; 
    //  Une condition avec un argument qui défini si val1 est divisible par lui même. 
    if ($val1 % 2 == 0)  
        { 
            // On affiche la variable et la concéténation + message pair
            echo $val1 . "pair <br />";

        }
 
    else 
         // On affiche la variable et la concéténation + message impair
        {
        echo  $val1 . " impair <br />";
    }
}

?>