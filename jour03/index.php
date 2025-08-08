<?php

$tab = [200, 204, 173, 98, 171, 404, 459];

foreach($tab as $value){
    if( $value % 2 === 0) echo "pair";
    else echo " impair";
}