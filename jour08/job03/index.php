<!-- Créez un formulaire qui contient un input de type de text nommé “prenom” et un bouton
submit. Lorsque l’on valide le formulaire, le prénom est ajouté dans une variable de
session. Afficher l’ensemble des prénoms.
Ajoutez un bouton nommé “reset” qui permet de réinitialiser la liste. -->

<?php
session_start();

$prenoms = "";

if (!isset($_SESSION['prenoms'])) {

    $_SESSION['prenoms'] = [];
}
if (isset($_GET['prenoms']) && $_GET['prenoms'] !== "") {

    $prenom = htmlspecialchars($_GET['prenoms']);

    $_SESSION['prenoms'][] = $prenom;
}

if (isset($_GET['reset'])) {



    $_SESSION['prenoms'] = [];
    session_destroy();
}



?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste prenom</title>
</head>

<body>
    <h1>liste des prenoms</h1>

    <form action="" method="get">
        <input type="text" name="prenoms" placeholder="Entrez un prénom">
        <input type="submit" name="Valider" value="Valider">
        <button type="submit" name="reset" value="reset">reset</button>

    </form>

    <h2>Prénoms enregistrés :</h2>
    <ul>
        <?php

        foreach ($_SESSION['prenoms'] as $p) {
            echo "<li>" . htmlspecialchars($p) . "</li>";
        }
        ?>
    </ul>

</body>

</html>