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
            echo "Utilisateur inscrit et majeur, accès autorisé.";
        }

        else {
            echo "Utilisateur inscrit et mineur, accès restreint.S";
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
        echo '<h4>' .$key. '</h4>';
        foreach($value as $keyb=>$valueb) {
            echo $keyb. ' ' .$valueb. ' ';
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


//exo 14
function prénomPerso ($bl, $bl2) {
    echo 'Hello '. $bl. $bl2;
}

//exo 15
function addition ($a, $b) {
    echo $a + $b;
}

function add3(&$padd) {
    $padd = $padd + 3;
    echo ' Résultat dans la fonction : ' .$padd;
}

//exo 16
function multecho($a, $b){
    echo $a. '*' .$b. '=' .$a * $b. '<br>';
}

function multreturn($a, $b){
    return $a. '*' .$b. '=' .$a * $b.'<br>';
}

//ex17
function PrixTVA20 ($a) {
    $a = $a * 1.20 ;
    echo 'Prix de' .$a ;
    return($a);
};

function AffichagePrixHT ($a) {
    echo 'Le prix HT est de ' .$a. '€' ;
};

function AffichagePrixTTC ($a) {
    echo 'Le prix TTC est de ' .$a. '€' ;
};


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



// exo formulaire de contact/inscription 

// function valid data pour checker les données
function valid_data ($data) {
    $data = trim($data);
    $data = htmlspecialchars($data);
    return($data);
}

function AffichageDonnéeUser() {

    if(isset($_POST['prenomducontact']) && isset($_POST['nomducontact']) && isset($_POST['mailducontact']) && isset($_POST['Admincontact'])) {

        
        $prenomducontactChars = valid_data($_POST['prenomducontact']);
        $nomducontactChars = valid_data($_POST['nomducontact']);
        $mailducontactChars = valid_data($_POST['mailducontact']);
        $admincontactChars = valid_data($_POST['Admincontact']);

        echo 'Prénom du contact : ' .$prenomducontactChars. '<br>';
        echo 'Nom du contact : ' .$nomducontactChars. '<br>';
        echo 'Mail du contact : ' .$mailducontactChars. '<br>';
        echo 'Est-ce que le contact est un admin ? : ' .$admincontactChars. '<br>';
    } else {
        echo 'Il manque des infos';
    }
}

///////////////////////////////////////////////////////// a modif à mettre à jour
function Form21() {

    if(isset($_POST['pseudoducontact21']) && isset($_POST['mailducontact21']) && isset($_POST['telducontact21']) && isset($_POST['motdepasseducontact21']) && isset($_POST['motdepasseducontact21confirm']) && !empty($_POST['pseudoducontact21']) && !empty($_POST['mailducontact21']) && !empty($_POST['telducontact21']) && !empty($_POST['motdepasseducontact21']) && !empty($_POST['motdepasseducontact21confirm'])) {

        if( $_POST['motdepasseducontact21'] === $_POST['motdepasseducontact21confirm'] ) {

            
            $pseudoducontact21Chars = valid_data($_POST['pseudoducontact21']);
            $mailducontact21Chars = valid_data($_POST['mailducontact21']);
            $telducontact21Chars = valid_data($_POST['telducontact21']);
            $motdepasseducontact21Chars = valid_data($_POST['motdepasseducontact21']);
            $motdepasseducontact21confirm21Chars = valid_data($_POST['motdepasseducontact21confirm']);
            
            
            
            
            echo 'Pseudo : ' .$pseudoducontact21Chars. '<br>';
            echo 'Mail : ' .$mailducontact21Chars. '<br>';
            echo 'Téléphone : ' .$telducontact21Chars. '<br>';
            echo 'Mot de passe : ' .$motdepasseducontact21Chars. '<br>';
            echo 'Mot de passe confirm : ' .$motdepasseducontact21confirm21Chars. '<br>';

        } else {
            echo 'La confirmation de mot de passe est incorrect';
        }

        

    } else {
        echo 'Il manque des infos';
    }
}

////////////////////////////////////////////////////////FIN EXO 21

/////////////////////// REQUETE BDD CRUD CO BDD ETC ///


    

function Connexion(&$conn) {
    
    $servername= 'localhost';
    $bdname= 'mycar_db';
    $username= 'root';
    $password='root';
    //on try de se connecter
    try {
        
        $conn = new PDO("mysql:host=$servername;dbname=$bdname",$username, $password);
        // on définit le mode d'erreur de PDO sur Exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        //statement pour faire la requete SQL.
        // On met ceci en commentaire, on sais maintenant que le lien avec le base de donnée ce fait bien. echo "Connexion à la base de donnée reussi. ";
        //( pour être sûr qu'on s'est bien connecté à la BDD)
        // à mettre en fonction plus tard pour appeler et que ce soit plus simple
        
    }
    //On capture les exceptions si une exception est lancée et on affiche *les informations relatives à celle-ci*/
    
    catch(PDOException $e) {
        echo "Erreur :" .$e->getMessage();
        
    }
};

function InsertCar($name, $model, $price, $color) {

    $dbco;
    
    Connexion($dbco);

    try {
        $sth = $dbco->prepare("INSERT INTO car(name,model,price,color)
        VALUES(:name,:model,:price,:color)");

        $sth->bindValue(':name', $name);   
        $sth->bindValue(':model', $model);   
        $sth->bindValue(':price', $price);   
        $sth->bindValue(':color', $color);   
        $sth->execute();

            echo 'Entrée ajoutée dans la table. ';
    }

    catch(PDOException $e){
        echo "Erreur :" .$e->getMessage();

    }
};


function FormInsertCar() {

    if(isset($_POST['NameCar']) && isset($_POST['ModelCar']) && isset($_POST['PriceCar']) && isset($_POST['ColorCar']) && !empty($_POST['NameCar']) && !empty($_POST['ModelCar']) && !empty($_POST['PriceCar']) && !empty($_POST['ColorCar'])) {


            
            $NameCarChars = valid_data($_POST['NameCar']);
            $ModelCarChars = valid_data($_POST['ModelCar']);
            $PriceCarChars = valid_data($_POST['PriceCar']);
            $ColorCarChars = valid_data($_POST['ColorCar']);
            
            
            
            
            echo 'Le nom de la voiture qui a été écris et qui est stocké dans la BDD est : ' .$NameCarChars. '<br>';
            echo 'Le modèle de la voiture qui a été écris et qui est stocké dans la BDD est : ' .$ModelCarChars. '<br>';
            echo 'Le prix de la voiture qui a été écris et qui est stocké dans la BDD est : ' .$PriceCarChars. '<br>';
            echo 'La couleur de la voiture qui a été écris et qui est stocké dans la BDD est : ' .$ColorCarChars. '<br>';

            InsertCar($NameCarChars, $ModelCarChars, $PriceCarChars, $ColorCarChars);

        

        

    } else {
        echo 'Il manque des infos';
    }
}


///////////:: READ DU CRUD///


function ReadCar($name, $model, $price, $color) {

    $dbco;
    
    Connexion($dbco);

    try {
        $sth = $dbco->prepare("SELECT name,model,price,color FROM car"); 
        $sth->execute();
        $dataReadCar = $sth->fetchAll(PDO::FETCH_ASSOC);

            
            
            exo23ArrayDuR($dataReadCar);
    }

    catch(PDOException $e){
        echo "Erreur :" .$e->getMessage();

    }
};


function exo23ArrayDuR ($NomArray){

    echo '
    <table>
    ';
    foreach($NomArray as $key=>$value) {
        echo '
        <tr> <th> Tableau n°' .$key. '</th></tr>';
        foreach($value as $keyb=>$valueb) {
            echo '<tr><td>'  .$keyb. '</td><td>' .$valueb. '</td></tr> ';
        }
        
    }

    echo '</table>';
}





?>