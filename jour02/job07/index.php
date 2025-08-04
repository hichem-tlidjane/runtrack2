<?php

$hauteur=5;
$largeur = $hauteur * 2;
$mid= $largeur / 2;

echo "<pre>";
for($y = 0; $y < $hauteur; $y++){
    $debut = $mid - 1 - $y;
    $fin = $mid + $y;

    for($x = 0; $x < $largeur; $x++){
        if ($x === $debut) echo "/";
        elseif ($x === $fin) echo "\\";
        elseif ($y === $hauteur - 1) echo "_";
        else echo "&nbsp";
    }

    
    echo "<br />";
}
echo "</pre>";