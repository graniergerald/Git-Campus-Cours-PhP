<?php
$prenomNom = "Gérald Granier";
$ageGG = "27 ans";
$x = 4;
$inscrit = true;
$age = 19;

$inscrit2 = true;
$age2 = 17;

$superadmin = "Vous êtes un super-admin, vous avez tous les droits";
$admin = "Vous êtes un admin classique, quelques droits mais pas fou fou";
$user = "Vous êtes un utilisateur, vous avez accés uniquement à quelques fonctionnalités";
$anonymous = "Vous n'êtes pas enregistré, vous n'avez aucune fonctionnalités disponible";

$visiteur1 = $anonymous;

$heure = 7;
$mois = 9;

//on passe au tableau
$FirstTableaux = [
    [1,2,4,8,16],
    [1,3,9,27,81]
];


$presentation ='Je m\'appelle '.$prenomNom. ' et j\'ai ' .$ageGG;
// simple quote n'interprete pas les variables (concatener avec simple quote et le "." pour chaque variable)

$presentation2 ="Je m'appelle $prenomNom et j'ai $ageGG";
// double quote pas besoin de concatener les variables

$stockOrange = 5;
$stockPeche = 8;
$stockTotal = $stockOrange + $stockPeche;
$stock = "Le stock magasin des Oranges est de $stockOrange, le stock des Pèches est de $stockPeche. Le stock total des produits est de $stockTotal";

?>