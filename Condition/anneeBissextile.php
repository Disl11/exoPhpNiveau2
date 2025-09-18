<?php

// Année Bissextile 
// Écrivez un algorithme qui détermine si une année est bissextile. 
// • Une année est bissextile si elle est divisible par 4, sauf si elle est divisible par 100 
// mais pas par 400. 

$année = 2024;

if(($année % 4 == 0 && $année % 100 != 0) || ($année % 400 == 0)){
    echo $année . " est une année bissextile";
}else{
    echo $année . " est pas une anéne bissextile";
}


?>