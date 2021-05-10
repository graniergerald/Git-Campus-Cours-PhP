<?php
$prenomNom = "Gérald Granier";
$ageGG = "27 ans";
$x = 4;
$inscrit = true;
$age = 19;

$presentation ='Je m\'appelle '.$prenomNom. ' et j\'ai ' .$ageGG;
// simple quote n'interprete pas les variables (concatener avec simple quote et le "." pour chaque variable)

$presentation2 ="Je m'appelle $prenomNom et j'ai $ageGG";
// double quote pas besoin de concatener les variables

$stockOrange = 5;
$stockPeche = 8;
$stockTotal = $stockOrange + $stockPeche;
$stock = "Le stock magasin des Oranges est de $stockOrange, le stock des Pèches est de $stockPeche. Le stock total des produits est de $stockTotal";

?>