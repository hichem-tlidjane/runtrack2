<!-- Créez un cookie nommé “nbvisites”. A chaque fois que la page est visitée, ajoutez 1.
Afficher le contenu du cookie.
Ajoutez un bouton nommé “reset” qui permet de réinitialiser ce compteur. -->


<?php

setcookie('nbvisites', 0);


if (isset($_COOKIE['nbvisites'])) {


    setcookie('nbvisites', $_COOKIE['nbvisites'] + 1);
}


if (isset($_GET['reset'])) {

    setcookie('nbvisites', 0);
}

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie</title>


</head>

<body>

    <h1>Nombres de visites: <?php echo $_COOKIE['nbvisites'];  ?></h1>

    <form action="" method="get">

        <button type="submit" name="reset">reset</button>

    </form>

</body>

</html>