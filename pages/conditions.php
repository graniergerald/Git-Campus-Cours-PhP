<?php 



function exo1conditions ($x) {

if ( $x != 5 ) 
{
    echo "binjour : X est différent de 5 </br>"; 
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

function exo3conditions ($a, $b) {
    if ($a == false )
    {
        echo "Utilisateur non inscrit, accès refusé";
    }

    elseif ($a == true AND $b >=18)
    {
        echo "Utilisateur inscrit et majeur, accès autorisé";
    }
    
    else {
        
        echo "Utilisateur inscrit et mineur, accès restreint";
    }
}


function exo4conditions ($superadmin, $admin, $user, $anonymous, $visiteur1) {
    if ( $visiteur1 == $superadmin ) {
        echo $visiteur1;
    }

    elseif ( $visiteur1 == $admin ) {
        echo $visiteur1;
    }

    elseif ( $visiteur1 == $user) {
        echo $visiteur1;
    }

    elseif ( $visiteur1 == $anonymous) {
        echo $visiteur1;
    }
}

function exo5conditions ($heure) {
    if ($heure <= 14 AND $heure >= 9) {
        echo "Nous somme le matin et il est $heure h";
    }
    elseif ($heure <= 18 AND $heure > 14) {
        echo "Nous somme l'après-midi et il est $heure h";
    }
    elseif ($heure > 18 AND $heure <= 23) {
        echo "Nous somme le soir et il est $heure h";
    }
    elseif ($heure > 23 OR $heure < 9) {
        echo "Nous somme la nuit et il est $heure h";
    }
}

function mois ($mois) {
    switch ($mois) {
        case 1:
            echo "Janvier";
            break;
        case 2:
            echo "Février";
            break;
        case 3:
            echo "Mars";
            break;
        case 4:
            echo "Avril";
            break;
        case 5:
            echo "Mai";
            break;
        case 6:
            echo "Juin";
            break;
        case 7:
            echo "Juillet";
            break;
        case 8:
            echo "Août";
            break;
        case 9:
            echo "Septembre";
            break;
        case 10:
            echo "Octobre";
            break;
        case 11:
            echo "Novembre";
            break;
        case 12:
            echo "Décembre";
            break;
        default:
            echo 'Veuilez entrez un mois valide :)';
    }
}


?>