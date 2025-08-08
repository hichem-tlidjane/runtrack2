<?php

// Développez un algorithme qui affiche le nombre d’arguments $_POST.
// Tips :
// Pour tester votre code, créez un formulaire html <form> de type POST avec différents
// champs <input> de type “text” et un <input> de type “submit” pour l’envoi.
// Vous pouvez ensuite afficher avec echo directement dans votre page par exemple :
// “Le nombre d’argument POST envoyé est : 

// Afficher le nom de l'utilisteur grâce à INPUT 'identifiant'
echo 'Hello ' . $_POST["identifiant"] . '!';
// afficher le mot de passe grâce à l'input 'password'
echo 'ton mdp est ' . $_POST["password"] ;


?>





<!DOCTYPE html>
<html lang='fr'>
	<head>
	<meta charset="utf-8">
</head>
<body>
	<form method='POST' action="">
    <label for="username">nom d'utilisateur</label>
		<input type='text' name='identifiant'>
    <label for="mdp">Password</label>
   		 <input type='text' name='password'>
    <input type='submit' value='Envoyer'>
	</form>
</body>

</html>

