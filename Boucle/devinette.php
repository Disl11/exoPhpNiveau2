<?php
// Devinette 
// L'ordinateur choisit un nombre aléatoire entre 1 et 10. L'utilisateur a 3 tentatives 
// pour deviner le nombre. 
// • Après chaque tentative, affichez "Trop grand", "Trop petit" ou "Correct". 
// • Si l’utilisateur n’a pas trouvé après 3 essais, affichez "Perdu ! Le nombre était X". 




$nombre = rand(1, 10);

$nombreEssai = 3;

for($essai= 0 ; $essai <= 3 ; $essai++){

    $choixUtilisateur = readline("Choisir un nombre :");

    if( $nombre < $choixUtilisateur){

    echo "Trop grand  \n " ;

    }if ($nombre > $choixUtilisateur) {

    echo "Trop petit \n ";

    }if ($nombre == $choixUtilisateur){ 
        echo "correct  !!!!!!!!!   \n ";
        break;
    }
        if( $essai == $nombreEssai){
        
        echo "Perdu, le nombre a trouver était : " . $nombre;
    }
}

?>