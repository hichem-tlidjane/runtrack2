<!-- Créez une variable de session nommée “nbvisites”. A chaque fois que la page est
visitée, ajoutez 1. Afficher le contenu de cette variable.
Ajoutez un bouton nommé “reset” qui permet de réinitialiser ce compteur. -->


<?php

session_start();

if (!isset($_SESSION['nbvisites'])) {

    $_SESSION['nbvisites'] = 1;
} else {

    $_SESSION['nbvisites']++;
}

if (isset($_GET['reset'])) {

    $_SESSION['nbvisites'] = 0;
}


?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compteur de visites</title>
</head>

<body>

    <h1>nombres de visites : <?php echo $_SESSION['nbvisites']; ?></h1>

    <form action="" method="get">

        <button type="submit" name="reset">Reset</button>

    </form>

</body>

</html>