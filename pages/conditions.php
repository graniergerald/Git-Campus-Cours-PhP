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

function exo8ForArray ($prenomArray1, $countprenomArray1) {

    for ( $x=0 ; $x < $countprenomArray1 ; $x++ ) {

        echo $prenomArray1[$x]. ', ';

    }}

function exo9ForEachArray ($PrenomAges){
    foreach($PrenomAges as $a => $b) {
        echo $a. ' a ' .$b. ' ans<br>';

    }}

function exo10ForEachArray ($Produits){
    foreach($Produits as $key=>$value) {
        echo $key. ' : ';
        foreach($value as $keyb=>$valueb) {
            echo $keyb. ' : ' .$valueb. ' / ';
        }
        
    }
}

function exo11ForEachArray ($Produits2){

    echo '
    <table>
    ';
    foreach($Produits2 as $key=>$value) {
        echo '
        <tr> <th>' .$key. '</th></tr>';
        foreach($value as $keyb=>$valueb) {
            echo '<tr><td>'  .$keyb. '</td><td>' .$valueb. '</td></tr> ';
        }
        
    }

    echo '</table>';
}


function prénomPerso ($bl, $bl2) {
    echo 'Hello '. $bl. $bl2;
}

function addition ($a, $b) {
    echo $a + $b;
}

function add3(&$padd) {
    $padd = $padd + 3;
    echo ' Résultat dans la fonction : ' .$padd;
}


function multecho($a, $b){
    echo $a. '*' .$b. '=' .$a * $b. '<br>';
}

function multreturn($a, $b){
    return $a. '*' .$b. '=' .$a * $b.'<br>';
}

function PrixTVA ($a) {
    $x = $a * 1.20 ;
    return;
}

function AffichagePrix ($a) {
    echo 'Le prix sans TVA est de ' .$a. 'eu, le prix avec TVA est de : ' .$x ;
}

function DiffPrix ($a, $b) {
    return abs($a - $b);
};

//foreach a voir pour les resultat de soustraction
foreach($products as $key => $value) {
    
    $test = delta($value['mag1'], $value['mag2']);
    return abs($test);
}; 

// fin de la fonction.


function additionB(float $a, float $b) {
    echo $a, ' + ' .$b. ' = ' .($a + $b). '<br>';
};

function AffichageDonnéeUser() {

    if(isset($_POST['prenomducontact']) && isset($_POST['nomducontact']) && isset($_POST['mailducontact']) && isset($_POST['Admincontact'])) {

        $prenomducontactChars = htmlspecialchars($_POST['prenomducontact']);
        $nomducontactChars = htmlspecialchars($_POST['nomducontact']);
        $mailducontactChars = htmlspecialchars($_POST['mailducontact']);
        $admincontactChars = htmlspecialchars($_POST['Admincontact']);

        echo 'Prénom du contact : ' .$prenomducontactChars. '<br>';
        echo 'Nom du contact : ' .$nomducontactChars. '<br>';
        echo 'Mail du contact : ' .$mailducontactChars. '<br>';
        echo 'Est-ce que le contact est un admin ? : ' .$admincontactChars. '<br>';
    } else {
        echo 'Il manque des infos';
    }
}

?>