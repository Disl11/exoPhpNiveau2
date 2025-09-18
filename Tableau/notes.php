<?php

// Créez un tableau associatif qui stocke les notes de plusieurs élèves (nom => 
// note). 
// • Calculez la moyenne des notes. 
// • Indiquez la meilleure et la plus faible note. 


$notes = [
    "elodie" => 15,
    "jordan" =>  10,
    "valentin" => 14,
    "Brian" => 9
];


$eleves = array_keys($notes);
$somme = 0;

$moinBonneNotes = -1 ;
$plusBonneNotes = 21;
$eleveMeilleur = "";
$eleveMoinBon = "";


print_r($eleves);

for( $i = 0 ; $i < count($notes); $i++){

$nom = $eleves[$i];
$note =$notes[$nom];
$somme += $note;

if($note > $moinBonneNotes){
    $moinBonneNotes = $note;
    $eleveMoinBon = $nom;
}

if($note < $plusBonneNotes  ){

    $plusBonneNotes = $note;
    $eleveMeilleur = $nom;
}

}

$moyenne = $somme / count($notes);

echo "La moyenne des notes est ". $moyenne . "\n";
echo "La plus bonne notes de la classe est : ". $moinBonneNotes . "\n";
echo "La plus mauvaise notes de la classe est : ". $plusBonneNotes . "\n";

?>