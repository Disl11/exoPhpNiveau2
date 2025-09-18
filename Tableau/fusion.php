<?php

// Fusion de Tableaux Associatifs 
// Fusionnez deux tableaux associatifs. 
// • Si une clé existe dans les deux tableaux, la valeur du second tableau remplace 
// celle du premier.



$notes1= [
    "elodie" => 15,
    "jordan" =>  10,
    "valentin" => 14,
    "Brian" => 9
];

$notes2 = [
    "vincent" => 17,
    "chloe" =>  10,
    "christophe" => 5,
    "michelle" => 9
];


$fusion = $notes1 + $notes2;

print_r($fusion);



$fusion2 = array_merge($notes1, $notes2);

print_r($fusion2);


?>