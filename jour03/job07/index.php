<?php
$str = "Certaines choses changent, et d'autres ne changeront jamais.";
 
$newStr = substr($str,1) . $str[0] ;
///* substr($str, 1) coupe le premier caractère de la chaîne (à partir de l'index 1)
//* Ensuite, on ajoute le premier caractère ($str[0]) à la fin de la chaîne

 echo $newStr;
 

?>