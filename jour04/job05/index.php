<?php

    if(isset($_POST["bouton"])){
        echo  "<br/>";
        if(isset($_POST["username"]) && isset($_POST["password"])  ){

            if($_POST["username"] === "John" && $_POST["password"] === "Rambo"){
                echo "C’est pas ma guerre";
        
            }
            else {
                echo "Votre pire cauchemar.";
            }

    }
}
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
        <label for="username">username:</label>
        <input type="text" id="username" name="username" ><br><br>
        <label for="password">password</label>
        <input type="text" id="password" name="password"><br><br>
        <button type="submit" name="bouton" value="" >submit</button> 
     </form>
