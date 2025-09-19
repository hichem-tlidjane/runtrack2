<!-- Créez un formulaire <form> qui contient :
● un champ <input> nommé “str” de type “text”,
● une liste déroulante <select> nommée “fonction”
● un bouton <button> submit.
Lorsque vous validez le formulaire, vous devez appliquer des transformations à “str” en
fonction de l’option <option> choisie dans la liste déroulante.
Les choix possibles sont :
● “gras” : une fonction qui prend en paramètre “str” : gras($str). Elle écrit “str” en
mettant en gras (<b>) les mots commençant par une lettre majuscule.
● “cesar” : une fonction qui prend en paramètre “$str” et un nombre “$decalage”
(qui vaut 2 par défaut) : cesar($str, $decalage). $str doit s’afficher en décalant
chaque caractère d’un nombre égal à “$decalage”.
ex : Si $decalage vaut 1 alors “e” devient “f”. Si décalage vaut 3 alors “z” devient
“c”.
● “plateforme”, une fonction qui prend en paramètre “$str” : plateforme($str).
Elle affiche “$str” en ajoutant un “_” aux mots finissant par “me”. -->

<?php

function gras($str)
{

    $words = explode(" ", $str);

    foreach ($words as $word) {

        if (ctype_upper(substr(string: $word, offset: 0, length: 1))) {

            echo "<b> $word </b>";
        } else {

            echo " $word ";
        }
    }
}

function cesar($str, $decalage = 2)
{

    $result = "";

    for ($i = 0; $i < strlen($str); $i++) {

        $char = $str[$i];

        if (ctype_lower($char)) {

            $result .= chr((ord($char) - 97 + $decalage) % 26 + 97);
        } elseif (ctype_upper($char)) {

            $result .= chr((ord($char) - 65 + $decalage) % 26 + 65);
        } else {

            $result .= $char;
        }
    }
    echo $result;
}

function plateforme($str)
{

    $words = explode(" ", $str);
    $id = 0;
    foreach ($words as $word) {
        $word_cuted =  substr($word, -2);

        if ($word_cuted == "me") {
            $words[$id] = $words[$id] . "_";
        }

        $id++;
    }
    $words = implode(" ", $words);

    echo $words;
}



?>




<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<!-- if(isset($_GET["bouton"])){
    echo "<br/>";
    if(isset($_GET["username"])){
        echo "username: " . $_GET["username"];

    }
} -->
<?php if (isset($_GET["fonction"])) {

    $_GET["fonction"];

    if ($_GET["fonction"] === "gras") {
        gras($_GET["str"]);
    }

    if ($_GET["fonction"] === "cesar") {
        cesar($_GET["str"]);
    }
    if ($_GET["fonction"] === "plateforme") {
        plateforme($_GET["str"]);
    }
}
?>

<body>
    <form action="" method="GET">

        <input type="text" name="str">
        <select name="fonction">
            <option value="gras">Gras</option>
            <option value="cesar">Cesar</option>
            <option value="plateforme">Plateforme</option>
        </select>
        <button>submit</button>
        <?php
        //  echo gras;
        // echo cesar;
        // echo plateforme;
        ?>
    </form>

</body>

</html>