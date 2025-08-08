
<?php

// Créez une variable de type string nommée $str et affectez y le texte :
// “On n’est pas le meilleur quand on le croit mais quand on le sait”.
// Créez un dictionnaire (tableau keys/values) nommé $dic qui a comme keys
// “consonnes” et “voyelles”. Créez un algorithme qui parcourt, compte et stocke le
// nombre d'occurrences de consonnes et de voyelles de $str.
// Affichez ces résultats dans un tableau <table> html qui a comme <thead> “Voyelles” et
// “Consonnes”..

// Créez une variable de type string nommée $str et affectez y le texte :
// “On n’est pas le meilleur quand on le croit mais quand on le sait”.
// https://www.php.net/manual/fr/function.in-array.php
$str = "On n’est pas le meilleur quand on le croit mais quand on le sait.";

// https://www.php.net/manual/en/function.substr-count.php 
// Créez un dictionnaire (tableau keys/values) nommé $dic qui a comme keys
// “consonnes” et “voyelles”.

$consonnes = ['B', 'C', 'D', 'F', 'G', 'H', 'J', 'K', 'L', 'M', 'N', 'P', 'Q', 'R', 'S', 'T', 'V', 'W', 'X', 'Y', 'Z'];
$voyelles = ['A', 'E', 'I', 'O', 'U', 'Y'];

$dic = [
    'consonnes' => $consonnes, 
    'voyelles' => $voyelles
];

$str  = strtoupper($str);

$nb_consonnes = 0;
$nb_voyelles = 0;

$i = 0;

while (isset($str[$i])) {
    if (in_array($str[$i], $dic['consonne'])) $nb_consonnes++;
    elseif((in_array($str[$i], $dic['voyelles']))) $nb_voyelles++;
    $i++;
}

echo $nb_consonnes;
echo $nb_voyelles;

// foreach ($dic as $value) {
//     $result .= $voyelles;
//     if (strlen($str)) {
//         // Créez un algorithme qui parcourt, compte et stocke le
//         // nombre d'occurrences de consonnes et de voyelles de $str.
//         if in_array($value) {
//             echo $value;
    
//         }

//         echo $resul .= $voyelles;
//     }
// }





?>
