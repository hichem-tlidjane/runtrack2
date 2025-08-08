<?php 

$str = "Les choses que l'on possède finissent par nous posséder.";

//  Découper la chaîne en un tableau de caractères 
$conversion = mb_str_split($str); //divide la cadena en caracteres individuales (perfecto para acentos). [ L,E,S]

// 3. Inverser l'ordre des caractères dans un nouveau tableau
$inversiononarray = array_reverse($conversion);


// 4. Reconstituer la chaîne à partir du tableau inversé
$inverse = implode('', $inversiononarray);  //*antes de implode(), para que el array esté al revés y luego lo puedas convertir en cadena invertida.



// Afficher le résultat
echo $inverse;



?>
