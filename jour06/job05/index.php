<!-- //Créer un formulaire qui contient une liste déroulante nommée “style” et un bouton
// submit. La liste déroulante doit proposer au moins “style1”, “style2” et “style3. Créer 3
// fichiers css nommés “style1.css”, “style2.css” et “style3.css”. Chaque style doit avoir
// des effets sur le design du formulaire, la couleur de background, la police d’écriture...
// Lorsque l’on valide le formulaire, le style sélectionné doit être inclus et donc le visuel
// doit changer. -->


<!-- https://processwire.com/talk/topic/13643-combine-css-files-with-php/ -->
 <!-- https://www.php.net/manual/fr/control-structures.foreach.php -->

<!DOCTYPE html>
<html lang="fr">

<head>

<?php 
    if (isset($_GET['style'])) {?>
         <link rel="stylesheet" href="<?= $_GET["style"] ?> ">
    <?php } ?>


<!-- echo ($style === 'style1.css') ? 'admin-style' : 'user-style'; ?>" -->

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulaire deroulant</title>
</head>

<body>
    <form method="GET" action="">
        <!-- <label for="style"></label> -->
        <select name="style">
            <option value="style1.css">style 1</option>
            <option value="style2.css">style 2</option>
            <option value="style3.css">style 3</option>
        </select>

        <button type="submit" >submit</button>
    </form>
</body>

</html>