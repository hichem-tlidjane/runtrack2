<!-- Créez une fonction nommée “calcule()” qui prend 3 paramètres :
● le premier, “$a”, est un nombre,
● le deuxième, "$operation", est un caractère (string) contenant le type d’opération
(+, -, *, /, %),
● le troisième, “$b”, est un nombre.
La fonction doit retourner le résultat de l’opération. -->

<?php

function calcule($a, $operation, $b)
{
    switch ($operation) {
        case "+":
            echo $a + $b;
            break;
        case "-":
            echo $a + $b;
            break;
        case "*":
            echo $a * $b;
            break;
        case "/":
            echo $a / $b;
            break;
        case "%":
            echo $a % $b;
            break;
        default:
            echo "operation non reconnue";
            break;
    }
}

calcule(8, "*", 3);
