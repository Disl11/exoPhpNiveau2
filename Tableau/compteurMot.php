<?php
// Compteur de Mots 
// À partir d'une chaîne de caractères, créez un tableau associatif qui compte le 
// nombre d'occurrences de chaque mot. 
// • Ignorez la casse (majuscule/minuscule). 
// • Supprimez la ponctuation pour un vrai comptage. 

$phrase = "Et sans Pierre il y pas de pierre mais avec les pierre on fait des pyramide !";

$phrase = strtolower($phrase);
$phrase = str_replace(["!","?","&"], "", $phrase);

$mots = explode(" ", $phrase );

$compteur  = [];


 foreach($mots as $stockMot){

    if(isset($compteur[$stockMot])){
        $compteur[$stockMot]++;
    }else{
        $compteur[$stockMot] = 1 ; 
 }
 }

 print_r($compteur);
?>