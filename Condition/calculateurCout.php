<?php

// alculateur de Coût 
// Un service de covoiturage applique les tarifs suivants : 
// • 1€ par km pour les 10 premiers km. 
// • 0.8€ par km pour les 20 km suivants. 
// • 0.5€ par km pour le reste du trajet. 
// Écrivez un algorithme qui calcule le coût total d'un trajet en fonction de la 
// distance. 
// • Si la distance est 0 km, affichez "Coût = 0€". 



$distance = 45;
$prix10km = 1;
$prix30km = 0.8;
$prixPlus = 0.5;
$prixTotal = 0;

if( $distance >= 0 && $distance <= 10 ){

    $prixTotal = $distance * $prix10km;
    echo "le prix total est de : " . $prixTotal . " euros. 1 euro par km parcouru.";

}elseif($distance > 10 && $distance <= 30 ){

    $prixTotal = $distance * $prix30km;
    echo "Le prix total et de " . $prixTotal. " euros. 0.8 euros par km parcouru.";
}else{

    $prixTotal = $distance * $prixPlus;
    echo "Le prix total et de  ". $prixTotal . " euros. 0.5 euros par km parcouru.";
}



?>