<?php

function drawborder($largeur){
    for($i = 0; $i < $largeur; $i++){
        if($i === 0 || $i === $largeur -1) echo "+";
        else echo "-";
    }
}

function drawcenter($longueur){
    for($i = 0; $i< $longueur; $i++){
        if($i ===0 || $i === $longueur -1) echo "|";
        else echo "&nbsp";
    }
}

echo "<pre>";
$i = 0;
$height = 10;
$width = 20;

while($i < $height){
if( $i === 0 || $i === $height -1)drawborder($width);
    else drawcenter($width);
    echo "<br />";
    $i++;
}
echo "<pre/>";
