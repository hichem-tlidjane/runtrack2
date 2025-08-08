<?php

$compterArgumentsGET = count($_GET) ;
    echo "le nombre d'arguments GET est " . $compterArgumentsGET;



?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET Formulaire</title>
</head>
<body>

    <form method="get" action="">
        <label for="username">Nom d'utilisateur:</label>
        <input type="text" id="username" name="username" ><br><br>
        <label for="text">Password</label>
        <input type="text" id="password" name="password" ><br><br>
        <button type="submit" name="bouton" value="valider">submit</button> 
     </form>
</body>