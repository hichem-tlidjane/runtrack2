<?php 

ini_set('display_errors', 1);
error_reporting(E_ALL);

// Créez une variable de type string nommée $str et affectez y le texte :
// “On n’est pas le meilleur quand on le croit mais quand on le sait”.
// Créez un dictionnaire (tableau keys/values) nommé $dic qui a comme keys
// “consonnes” et “voyelles”. Créez un algorithme qui parcourt, compte et stocke le
// nombre d'occurrences de consonnes et de voyelles de $str.
// Affichez ces résultats dans un tableau <table> html qui a comme <thead> “Voyelles” et
// “Consonnes”..

// valeur initiale à déclarer et à convertir , donc on stocke la valeur initial de str
$str = "On n’est pas le meilleur quand on le croit mais quand on le sait.";

// consonnes qui va être explicitement définis dans un tableau array
$consonnes = ['B', 'C', 'D', 'F', 'G', 'H', 'J', 'K', 'L', 'M', 'N', 'P', 'Q', 'R', 'S', 'T', 'V', 'W', 'X', 'Y', 'Z'];

// voyelles qui va être explicitement définis dans un tableau array
$voyelles = ['A', 'E', 'I', 'O', 'U', 'Y'];


// déclarer la variable dic pour retourner la clé (variable) et sa valeur implémenter
// qui servira à retourner les valeurs de consonnes et voyelles

$dic = array(
    'consonnes' => $consonnes,
    'voyelles'  => $voyelles 
    
);


// on stocke les variables de type INT pour remplir les colonnes 
// consonnes et voyelles
$count_consonnes = 0;
$count_voyelles  = 0;


// une conversion que l'on stocke et qu'on utilisera pour l'algorithme
// la fonction split_str permet de convertir type string en INT
// strtoupper permet de gérer les majuscules d'une variable
$char = str_split(strtoupper($str)); 

// https://www.php.net/manual/fr/function.in-array.php

//  itérer des valeurs de nos variables dic puisque dic as value
// je récupére la variable char et le stockage de mes entiers 
//  interpreter avec in array et d'associer une valeur stocké dans compteur 

foreach ($char as $compteur) {

    if (in_array($compteur, $dic['voyelles'])) {
        $count_voyelles++;
        }
        elseif (in_array($compteur, $dic['consonnes'])) {
        $count_consonnes++;
        }
    
}


echo "<table border='1'>";
echo "<tr> <td>nombres de consonnes : $count_consonnes </tr> </td> </br>"; 
echo "<tr> <td>nombres de voyelles : $count_voyelles </tr> </td></br>";
echo "</table>";





?>