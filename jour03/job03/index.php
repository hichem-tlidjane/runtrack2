<?php

// Créez une variable de type string nommée $str et affectez y le texte :
// “I'm sorry Dave I'm afraid I can't do that”.
// Créez un algorithme qui parcourt cette chaîne et affiche uniquement les voyelles.
// Ex. : IoyaeIaaiIaoa


//  utilisation d'un backtick ` ` <= pour délimiter une chaine de caractére dans une fonction echo.

// strtoupper gerer les caractére en majuscule.
// substr et supprimer des caractére string 
// utiliser la négation sur une indexation à afficher
// vérification des voyelles dans le tableau sur une fonction en utilisant "!" pour exclure les autres
// caractéres par négation pour qui gere un affichage string et utiliser un echo.
// str (fonctions qui gere les affichages et les comparaisons ou spécificité d'affichage)
// php.net https://www.php.net/manual/en/language.operators.string.php
// https://www.php.net/manual/en/ref.strings.php



// str = la chaine caractère à afficher.
// gestion des doubles cotes qu'il faut ajouter dans un array pour avoir un résultat identique à l'exercice.
$str = "I'm sorry Dave I'm afraid I can't do that.";
// déclare une variable avec des majuscules comme un dictionnaire 

$voy = ['A','E','I','O','U','Y']; 

// déclare une variable nettoyer en string donc caractére prêt à étre gérer avec double cote.

$resul = "";



for ($i = 0; $i < strlen($str); $i++) {

// l'argument If la fonction in_array qui retourne un booleen avec l'argument suivant : gestion des caractére en majuscule 
//  on utilise la variable str pour la convertir à la variable i et dans la fonction strtoupper j'indique ma variables string 
// donc $voy ( a comprendre donc la fonction gére + variable + le dictionnaire)

    if (in_array(strtoupper($str[$i]), $voy)) {
        $resul .= $str[$i];
    }
}
// fonction echo qui affiche la variable résultat
echo $resul; 


?>