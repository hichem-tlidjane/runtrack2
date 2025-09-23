<!-- Créez un formulaire de connexion qui contient un input de type de text nommé
“prenom” et un bouton submit nommé “connexion”. Lorsque l’on valide le formulaire, le
prénom est ajouté dans un cookie. Si un utilisateur a déjà entré son prénom, n'affichez
plus le formulaire de connexion. A la place, écrivez “Bonjour prenom !” et ajouter un
bouton “Déconnexion” nommé “deco”. Lorsque l’utilisateur se déconnecte, il faut à
nouveau afficher le formulaire de connexion. -->


<?php
setcookie('prenom', '');

if (isset($_GET['connexion']) && !empty($_GET['prenom'])) {


    setcookie('prenom', $_GET['prenom']);

    $_COOKIE['prenom'] = $_GET['prenom'];
}


if (isset($_GET['déco'])) {

    setcookie('prenom', 0);
    unset($_COOKIE['prenom']);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=form, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php if (!empty($_COOKIE['prenom'])): ?>
        <h1>Bonjour <?php echo htmlspecialchars($_COOKIE['prenom']);  ?></h1>

        <form action="" method="get">

            <button type="submit">Déco</button>
        </form>

    <?php else: ?>

        <form action="" method="get">

            <input type="text" name="prenom">

            <button type="submit" name="connexion" value="1">Connexion</button>

        </form>
    <?php endif; ?>

</body>

</html>