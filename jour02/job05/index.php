<?php

function isPrime($number){
    if($number == 0 || $number == 1) return false;
    
    $i = 2;
    while($i <$number){
        if($number % $i == 0) return false;
        $i++;
    }
    return true;
}

for($i=2;$i <=1000;$i++){
    if(isPrime($i)) echo "$i<br />";
}