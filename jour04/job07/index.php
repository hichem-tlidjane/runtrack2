<?php

// Report all PHP errors
error_reporting(E_ALL);


// //Faire un formulaire avec deux <input> de type text ayant comme nom “largeur” et
// “hauteur” et un bouton submit.
// Vous devez créer un algorithme qui affiche, à la validation du formulaire,
// une maison telle que :
// Si on entre les valeurs : largeur =10 et hauteur = 5 dans les champs, la
// maison qui s’affiche sur la page doit ressembler à ceci :

$hauteur = 0;
$largeur = 0;

if (isset($_POST["bouton"])) {
    echo  "<br/>";
    if (isset($_POST["hauteur"]) && isset($_POST["largeur"])) {
        $hauteur = $_POST["hauteur"];
        $largeur = $_POST["largeur"];
    }
    
    
    echo "<pre>";
    for ($y = 0; $y < $hauteur; $y++) {
        $debut = $largeur / 2 - 1 - $y;
        $fin = $largeur / 2 + $y;
    
        for ($x = 0; $x < $largeur; $x++) {
            if ($x === $debut) echo "/";
            elseif ($x === $fin) echo "\\";
            elseif ($y === $hauteur - 1) echo "_";
            elseif ($x > $debut && $x < $fin) echo "_";
            else echo "&nbsp";
        }
        echo "<br />";
    }
    for ($i = 1; $i <= $hauteur; $i++) {
        for ($j = 1; $j <= $largeur; $j ++) {
            if ($j == 1 || $j == $largeur) {
                echo "|";
            } 
            elseif($i == $hauteur) {
                echo "_";
            }
            else {
                echo "&nbsp";
            }
            }
        echo "<br />";
    }
}
echo "</pre>";

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>_POST$_POST Formulaire</title>
</head>

<body>

    <form method="post" action="">
        <label for="hauteur">hauteur:</label>
        <input type="number" id="hauteur" name="hauteur"><br><br>
        <label for="largeur">largeur</label>
        <input type="number" id="largeur" name="largeur"><br><br>
        <button type="submit" name="bouton" value="">submit</button>
    </form>