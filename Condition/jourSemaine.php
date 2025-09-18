<?php
// Jour de la Semaine 
// Demandez à l'utilisateur un nombre entre 1 et 7 et affichez le jour de la semaine 
// correspondant (1 = lundi, 2 = mardi, etc.). 
// • Si le nombre n’est pas compris entre 1 et 7, affichez "Erreur : nombre invalide". 


$nombre = readline("Veuillez entre un nombre entre 1 et 7 : ");

switch($nombre){
    case 1:
    echo "lundi";
    break;

    case 2:
    echo "mardi";
    break;

      case 3: 
    echo "Mercredi";
    break;

      case 4: 
    echo "Jeudi";
    break;

      case 5: 
    echo "Vendredi";
    break;

      case 6:
    echo "Samedi";
    break;

      case 7: 
    echo "Dimanche";
    break;

    default:
    echo "veuillez rentre un chiffre entre 1 et 7  !!!!!";
    break;

}

?>