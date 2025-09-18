<?php

// 1. Le Juste Prix 
// Écrivez un algorithme qui demande à l'utilisateur de deviner un nombre secret 
// (entre 1 et 100). 
// • Si le nombre est trop grand, affichez "C'est moins !". 
// • S'il est trop petit, affichez "C'est plus !". 
// • Si c'est le bon nombre, affichez "Bravo !". 
// • L'utilisateur a maximum 10 tentatives. À la fin, si le nombre n’est pas trouvé, 
// affichez "Perdu, le nombre était X".


$nombre = rand(1, 100);

$nombreEssai = 10;

for($essai= 0 ; $essai <= 10 ; $essai++){

    $choixUtilisateur = readline("Choisir un nombre :");

    if( $nombre > $choixUtilisateur){

    echo "C'est plus  \n " ;

    }if ($nombre < $choixUtilisateur) {

    echo "C'est moins  \n ";

    }if ($nombre == $choixUtilisateur){ 
        echo "c'est gagner !!!!!!!!!   \n ";
        break;
    }
        if( $essai == $nombreEssai){
        
        echo "Perdu, le nombre a trouver était : " . $nombre;
    }
}








?>
