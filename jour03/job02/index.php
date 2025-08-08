<?php


// Créez une variable de type string nommée $str et affectez y le texte :
// “Tous ces instants seront perdus dans le temps comme les larmes sous la pluie.”
// Parcourir cette chaîne en affichant seulement un caractère sur deux.
// Ex. : Tu e ntnssrn edsdn etmscmelslre osl li.


// affecter le texte sous la chaine string $str
// parcourir la chaine string
// afficher un caractere sur deux

// strlen fonction de compte des caractères.


// substr(string $string, int $offset, ?int $length = null): echo (string)
//  substr($j:0;  )
// substr(string $string, int $offset, ?int $length = null): echo (string)
//  substr($calcul )
// substr-replace 
// https://www.php.net/manual/fr/function.str-replace.php str-replace


// for ($i=0; $i < (int)$calcul; $i++) {
//     if ($i ) {

//     }
 
// }
//  On déclare str avec la phrase.
$str = "Tous ces instants seront perdus dans le temps comme les larmes sous la pluie.";
//  attribue la variable calcul à un retour de calcul de chaine de caractére pour la variable str
// strlenght = calcul de la longeur des chaines de caractères. en bytes.

$calcul = strlen($str);

//  boucle for avec l'arguement suivant on exprimer que l'index démarre à 0, par la suite  on dis que index sera plus 
// strictement plus petit que la variable calcul et on argumente que l'indexation sera à partir de +2 
for ($i = 0; $i <= $calcul; $i += 2) {
    // retour echo sur la fonction substr qui va intégrer dans un argument la conversion de str,
    //  de l'indexaction et de sa longueur.
    echo substr($str, $i, 1);
   }

// if substr($j:0; $j < $calcul ; $i % 2) {
 
   
// }





?>

