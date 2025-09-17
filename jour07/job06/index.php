<!-- Créez une fonction nommée "“"leetSpeak($str)”. Cette fonction prend en paramètre une
chaîne de caractères nommée “$str”.
Elle doit retourner la chaîne de caractères “$str” convertie en leet speak. Cela signifie
qu’elle doit la modifier de sorte à ce que :
● les “A” deviennent des “4”,
● les “B” des “8”,
● les “E” des “3”,
● les “G” des “6”,
● les “L” des “1”,
● les “S” des “5”
● les “T” des “7”.
Cela est valable que l’on crie ou non (majuscules et minuscules). -->

<?php

function leetspeak($str){
$leetMap = [

    "A" => "4", "a" => "4",
    "B" => "8", "b" => "8",
    "E" => "3", "e" => "3",
    "G" => "6", "g" => "6",
    "L" => "1", "l" => "1",
    "S" => "5", "s" => "5",
    "T" => "7", "t" => "7",
];

return strtr($str, $leetMap);
}
 
  echo leetspeak("leasgtb");