<?php

// Écrivez un algorithme qui vérifie si un mot de passe respecte les conditions 
// suivantes : 
// • Au moins 8 caractères. 
// • Contient au moins une majuscule. 
// • Contient au moins un chiffre. 
// • Bonus : contient au moins un caractère spécial (!@#$%^&*, etc.). 


function mdpValide($mdp){

    if(strlen($mdp) <= 8){
        return "Au minimun 8 carcater";
    }

if(strpbrk( $mdp, 'ABCDEFGHIJKLMNOPQRSTUVWXYZ') ===  false){

    return  "Au minimum une Majuscule" ;
}


if(strpbrk($mdp,'0123456789') === false){
 
    return false . "Au minimum un chiffre";
}

return "mot de passe valide ";


}


echo mdpValide("JesuisEZEZEZE1");




?>

