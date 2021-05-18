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

    'Tong' => ['Quantité : ' => 20, 'Prix' => 32..'€', 'Description: ' => 'Des Tong licorne, pour avoir la classe à Dallas. <br>'],

    'Van\'s' => ['Quantité : ' => 15, 'Prix' => 66..'€', 'Description: ' => 'Des Van\'s tout juste sorti de l\'usine, elle sentent le caoutchouc à plein nez mais bon elles sont quand même jolie avec leur 30cm d\'épaisseur de semelles. <br>'],
    
    'Chaussons' => ['Quantité : ' => 28, 'Prix' => 15..'€', 'Description: ' => 'Des chaussons 100% plastiques pour respecter la convention collective 100% polluante. <br>'],

    'Bottes' => ['Quantité : ' => 27, 'Prix' => 35..'€', 'Description: ' => 'Des bottes faites al\'arrache mais bon elles font le taf\'. <br>'],
    
    'Ballerine' => ['Quantité : ' => 4, 'Prix' => 69..'€', 'Description: ' => 'Des ballerine à usage unique et pour la maudite sommes de 69eu, franchement ça vaux le coup. <br> '],
    
];


$Produits2 = [

    'Audi A4' => ['Quantité' => 20, 'Prix' => 22000..'€', 'Couleur' => 'Rouge'],

    'Toyota Supra' => ['Quantité' => 15, 'Prix' => 66000..'€', 'Couleur' => 'Bleu'],
    
    'Honda Civic' => ['Quantité' => 28, 'Prix' => 15000..'€', 'Couleur' => 'Jaune'],

    'Peugeot 206' => ['Quantité' => 27, 'Prix' => 2500..'€', 'Couleur' => 'Vert'],
    
    'Renault 5' => ['Quantité' => 0, 'Prix' => 1000..'€', 'Couleur' => 'Violet'],
    
];

$prénomPerso = "Gérald ";
$questionCommentVa = "Comment ça va ?";

//////////////////////////////////////////////////////////////////////////
$presentation ='Je m\'appelle '.$prenomNom. ' et j\'ai ' .$ageGG;
// simple quote n'interprete pas les variables (concatener avec simple quote et le "." pour chaque variable)

$presentation2 ="Je m'appelle $prenomNom et j'ai $ageGG";
// double quote pas besoin de concatener les variables

$stockOrange = 5;
$stockPeche = 8;
$stockTotal = $stockOrange + $stockPeche;
$stock = "Le stock magasin des Oranges est de $stockOrange, le stock des Pèches est de $stockPeche. Le stock total des produits est de $stockTotal";


//Warm Up tableaux diff de prix

$diffPdt1 = 0;
$diffPdt2 = 0;
$diffPdt3 = 0;
$diffPdt4 = 0;
$diffPdt5 = 0;

$PrixWarmUp = [

    'Kinder Bueno 180g' => ['Casino, prix' => 3.50, 'Leclerc, prix' => 3.80, 'Différence de prix' => $diffPdt1],

    'Prince Tout Choco' => ['Casino, prix' => 6, 'Leclerc, prix' => 6.66, 'Différence de prix' => $diffPdt2],
    
    'Figolu Figue' => ['Casino, prix' => 5.50, 'Leclerc, prix' => 5, 'Différence de prix' => $diffPdt3],

    'Malteser' => ['Casino, prix' => 3, 'Leclerc, prix' => 4, 'Différence de prix' => $diffPdt4],
    
];   

//exo17 return.

$PrixTVAa = 50;
$PrixTVAb = 100;
$PrixTVAc = 112;
$PrixTVAd = 45;
$PrixTVAe = 31;



?>