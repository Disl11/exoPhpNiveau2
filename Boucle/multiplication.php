<?php
//  Table de Multiplication 
// Demandez un nombre N à l'utilisateur et affichez sa table de multiplication de 1 à 
// 10 sous la forme : 
// N x 1 = …, N x 2 = …, etc. 

$nombre = readline("Entre un nombre ");

for($i = 0 ; $i <= 10 ; $i++){

    $resulta = $nombre * $i;

    echo $nombre . " X " . $i . " = " . $resulta . "\n"  ;

}


?>