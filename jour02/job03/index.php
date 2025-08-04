<?php

$i = 0;
while($i <= 1000){

    if($i ===42){
    echo " La plateforme_<br />";

}
    elseif($i <=20){
        echo "<i>$i</i><br />";

}
elseif($i >=25 && $i <=50){
    echo "<u>$i</u><br />";
    
} else{
    echo "$i<br />";
}

    $i++;
}