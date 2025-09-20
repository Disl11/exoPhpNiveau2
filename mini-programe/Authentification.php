<?php
// Crée un systeme d'authenfication avec un tableau associatif (utilisateur => mot_de_pass).
//demandez a l'utilisateur ses identifiants. 
// S'ils sont correctt, affichez "bienvenue"
//Sinon affichez "identifiant incorect"
//apres 3 echec , afficher "compte bloqué"



$utilisateur = [
    "jordan" => "1234",
    "brian " => "azerty",
    "lucette" => "abcd",
];


$tentative = 0;
$maxtentative = 3;
$authOk = false;

while( $tentative < $maxtentative ){
    $username = readline("Entre nom d'utilisateur  :");
    $motDePass = readline("Entre votre mot de passe :  ");

    if(isset($utilisateur[$username]) && $utilisateur[$username] === $motDePass){
        echo "Bienvenue " . $username;
        $authOk = true;
        break;

    } else {
        $tentative ++;
        echo "Identifiant incorect, tentativ restant : \n";
    }
}

if (!$authOk){
    echo "compte bloqué";
}

?>