<?php

// Inversion de Tableau 
// Inversez les éléments d'un tableau sans utiliser de fonction native comme 
// reverse(). 

$couleur = ["rouge" , "bleu", "gris" , "vert", "orange"];
$inverse = [];

for( $i = count($couleur) - 1 ; $i >= 0; $i --){
    echo $couleur[$i]. "\n";
}

?>