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

$prenomArray1 = array('Camille', 'Ophélie', 'Arezki', 'Enzo', 'Ehoarn', 'Seb', 'AC', 'Amandine', 'Gérald', 'Mathieu');
$countprenomArray1 = count($prenomArray1);

$PrenomAges = ['Marie' => 27, 'Thomas' => 29, 'Jennifer' => 21, 'Damien' => 29];
$Produits = [

    'Tong' => ['Quantité' => 20, 'Prix' => 32..'€', 'Description' => 'Des Tong licorne, pour avoir la classe à Dallas'],

    'Van\'s' => ['Quantité' => 15, 'Prix' => 66..'€', 'Description' => 'Des Van\'s tout juste sorti de l\'usine, elle sentent pas mal mais bon elles sont quand même jolie avec leur 30cm d\'épaisseur de semelles'],
    
    'Chaussons' => ['Quantité' => 28, 'Prix' => 15..'€', 'Description' => 'Des chaussons 100% plastiques pour respecter la convention collective 100% polluante'],

    'Bottes' => ['Quantité' => 27, 'Prix' => 35..'€', 'Description' => 'Des bottes faites al\'arrache mais bon elles font le taf\''],
    
    'Ballerine' => ['Quantité' => 4, 'Prix' => 69..'€', 'Description' => 'Des ballerine à usage unique et pour la maudite sommes de 69eu, franchement ça vaux le coup'],
    
];

//////////////////////////////////////////////////////////////////////////
$presentation ='Je m\'appelle '.$prenomNom. ' et j\'ai ' .$ageGG;
// simple quote n'interprete pas les variables (concatener avec simple quote et le "." pour chaque variable)

$presentation2 ="Je m'appelle $prenomNom et j'ai $ageGG";
// double quote pas besoin de concatener les variables

$stockOrange = 5;
$stockPeche = 8;
$stockTotal = $stockOrange + $stockPeche;
$stock = "Le stock magasin des Oranges est de $stockOrange, le stock des Pèches est de $stockPeche. Le stock total des produits est de $stockTotal";

?>