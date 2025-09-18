<?php
// Écrivez un algorithme qui affiche un triangle d'étoiles de N lignes. Exemple pour 
// N=4 : 
// * 
// ** 
// *** 
// **** 

$n = 4; 

for($i = $n ; $i >= 1; $i--){
    for($y = 1 ; $y <= $i; $y++ ){

        echo "*";
    }
   echo "\n";
}

?>