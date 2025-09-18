<?php
//  Écrivez un algorithme qui vérifie si un élément est présent dans un tableau. 
// • S'il est présent, renvoyez son ou ses index (s’il apparaît plusieurs fois). 
// • Sinon, renvoyez -1.


$couleur = ["rouge" , "bleu", "gris" , "vert", "orange"];

$index = array_keys($couleur, "rouge");

print_r($index);




?>