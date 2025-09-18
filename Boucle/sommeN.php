<?php
//  2. Somme des N Premiers Nombres 
// Demandez un nombre N à l'utilisateur et calculez la somme de tous les entiers 
// de 1 à N. 
// • Bonus : proposez aussi la solution avec la formule mathématique N*(N+1)/2. 


$nombre = readline("Entre une valeur : ");
$somme = 0;

for($i = 0 ; $i <= $nombre ; $i++ ){

 $somme += $i;

}

echo "La somme de tout les entier  du nombre  " . $nombre . " et " . $somme; 

?>