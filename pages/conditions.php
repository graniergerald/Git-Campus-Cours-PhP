<?php 



function exo1conditions ($x) {

if ( $x != 5 ) 
{
    echo "binjour X est diférent de 5 </br>"; 
}

if ( $x == "4")
{
    echo "X est égale à 4";
}}

function exo2conditions ($inscrit, $age) {
    if ($inscrit == true)
    {
        echo "Quel est votre âge ? ";

        if ($age >= 18) {
            echo "Utilisateur inscrit et majeur, accès autorisé";
        }

        else {
            echo "Utilisateur inscrit et mineur, accès restreint";
        }
    }

    else {
        echo "Utilisateur non inscrit, accès refusé";
    }
}


?>