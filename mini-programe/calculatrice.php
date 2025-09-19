<?php

// Calculatrice en Ligne de Commande 
// Construisez une calculatrice qui prend deux nombres et un opérateur (+, -, *, /). 
// • Affichez le résultat. 

$a = readline("Entre votre premier valeur : ");
$b = readline("Entre votre seconde valeur : ");
$operateur = readline("choisir un operateur de calcule ( +,-,* ou / )  : ");



switch ($operateur) {
    case '+':
        echo "resulta : " . $a + $b;
        break;
    
    case '-':
        echo"resulta : " .$a - $b;
        break;

    case '*':
       echo "resulta : " .$a * $b;
        break;

    case '/':
        if($b == 0){
            echo "on ne peu pas diviser par zero ! ";
        }else{
            echo "resulta : " . ($a / $b);
        }
        break;

    default:
        echo "operateur invalide ";
        break;
}




?>