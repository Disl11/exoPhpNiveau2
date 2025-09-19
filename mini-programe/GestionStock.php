<?php
// . Gestion de Stock 
// Créez un programme qui gère un inventaire sous forme de tableau associatif 
// (article => quantité). Le programme doit permettre : 
// • Ajouter un article avec une quantité. 
// • Mettre à jour la quantité d’un article. 
// • Supprimer un article. 
// • Afficher les articles dont le stock est inférieur à 10. 




$produit = [ 
    "stylo" => 12,
    "regles" => 8,
    "gomme" => 15,
    "colle" =>1
];


while(true){

    echo "++++++++++++++++++++++++++++++++ \n";
    echo "1- Ajouter un article \n";
    echo "2- Modifier la quantite \n";
    echo "3- Suprmier un  article \n";
    echo "4- Afficher les articles inferieur a 10 \n";
    echo "5- Afficher le tableau \n";
    echo "6- Quitter le programme \n";
    echo "++++++++++++++++++++++++++++++++ \n";
    
    $choix = readline("Votre choix : ");

switch($choix){

    case "1" :
        $nomArticle = readline("Ajouter un nom a l'article : ");
        $quantite = readline("Ajouter la quantite : ");
        $produit[$nomArticle] = $quantite;
        break;

    case "2" :
        $nomArticle = readline("Quel article voulez vous modifier ? :");
        $newQuantite = readline("Quel est la nouvelle quantité ?");
        $produit[$nomArticle] = $newQuantite;
        break;
    

    case "3" :

        $nomArticle = readline("Quel article souhaitez vous suprimer ? ");
         unset($produit[$nomArticle]);
         break;
         

    case "4" :

      
            foreach($produit as $article => $quantite){
            if($quantite < 10 ){
            echo  $article . " " . $quantite. "\n";
                }
            }
            break;
            

    case "5" :
        print_r($produit);
        break;

    case "6":
        exit;

        default:
        echo "operateur invalide ";
        break;

}}




// +++++++ En dure +++++++
//ajouter un article
// $produit["crayon"] = 7;

//modifier la valeur de colle;
// $produit["colle"] = 4;

// suprimer un article.
// unset($produit["regles"]);





?>