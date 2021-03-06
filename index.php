<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/normalize.css">
    <link rel="stylesheet" href="style/style.css">
    <title>Php Cours</title>
</head>
<body>
<?php include("pages/main.php"); ?>
  

    <!-- Header -->
		<?php include("pages/header.php"); ?>

    
    <!-- Section 1 en ligne 1 exo -->
    <section class="section_exo1_variable">

      <div class="div_exo1_variable cards">
    
        <h2>Exo 1 sur les variables</h2>

        <p class="presentation"> On appel les variables $presentation et $presentation2 pour des tests : <?php echo $presentation ?> ; <?php echo $presentation2 ?></p>

        <p class="stockfruits">On crée des variables sur des Oranges et des Pèches, on affiche le stock et on fait le cumul des 2 stocks : <?php echo $stock ?></p>
        <p> Le stock des Oranges est de <?php echo $stockOrange ?>. <?php echo "Le stock des Peches est de $stockPeche" ?> </p>
      </div>

    </section>

    <!-- Section 2 en ligne 3 exo -->
    <div class="ExoConditions">
      <section class="section_exo1_condition">

        <div class="div_exo1_conditions cards cardsConditions">
          <h2>Exo 1 sur les conditions</h2>
          <p>Exo sur les if avec opérateur de comparaison</p>
          <p><?php exo1conditions($x); ?></p>

        </div>
      </section>

      <section class="section_exo2_condition">

        <div class="div_exo2_conditions cards cardsConditions">
          <h2>Exo 2 sur les conditions</h2>
          <p>Else et Elseif pour vérifier une condition de "inscrit" et "âge" : <?php exo2conditions($inscrit, $age) ?> La variable âge est directement modifier dans variables.php.</p>
        </div>
      </section>

      <section class="section_exo3_condition">
        <div class="div_exo3_conditions cards cardsConditions">
          <h2>Exo 3 sur les conditions</h3>
          <p>Idem que l'exo 2 mais la condition de la fonction est écris différemment : <?php exo3conditions($inscrit2, $age2) ?></p>
        </div>
      </section>
    </div>


  <!-- Section 3 en ligne 2 exo -->
    <div class="ExoConditions">

      <section class="section_exo4_condition">
        <div class="div_exo4_conditions cards cardsConditions">
          <h2>Exo 4 sur les conditions</h2>
          <p>On créer 4 rôles superadmin, admin, user et anonymous. En fonction du rôle donné ( manuellement ), on affiche une phrase. ( plus tard cela pourras être associé à un réel rôle. Ex : <?php exo4conditions($superadmin, $admin, $user, $anonymous, $visiteur1) ?></p>
        </div>
      
      </section>


      <section class="section_exo5_condition">
        <div class="div_exo5_conditions cards cardsConditions">
          <h2>Exo 5 sur des conditions</h2>
          <p>On met une conditions avec plusieurs heures et on défini les moments de la journée si cela correspond, à la matinée, à l'après-midi, au soir ou à la nuit. <?php exo5conditions($heure) ?></p>
        </div>
      
      </section>

    </div>


    <!-- Section 4 en ligne 2 exo sur cards unique -->
    <section class="section_exo6_Switch">

      <div class="div_2exo_cards cards cardConditions">
    
        <div class="border-right-left">
          <h2>Exo 6 sur les switch</h2>
          <p>On utilise les switch avec case de 1 à 12 pour afficher un mois en fonction de la valeur. Si cela ne rentre pas dans ce cas, on affiche un message d'erreur.</p>
          <p>Nous sommes en <?php mois($mois) ?> </p>
          <p>Case default affiche : Veuilez entrez un mois valide :)</p>
        </div>

        <div class="border-right-left">
          <h2>Exo 7 sur un tableaux multidimenssionnel</h2>
          <p>On crée 2 tableaux dans un tableaux et on selectionne les données à l'intérieur en se servant des index : count($prenomArray1);</p>
          <p>Valeur de tableaux : <?php echo $FirstTableaux[0][1]?></p>
          <p>Valeur de tableaux : <?php echo $FirstTableaux [1][2]?></p>
        </div>


      </div>

    </section>


    <!-- Section 5 en ligne 3 exo -->
    <div class="ExoConditions">
      <section class="section_exo1_condition">

        <div class="div_exo1_conditions cards cardsConditions">
          <h2>Exo 8 Boucle For pour afficher les valeurs d'un tableaux</h2>
          <p>Exo sur la boucle For qui appel tout les prénoms dans le tableaux grâce à l'incrémentation.</p>
          <p><?php exo8ForArray($prenomArray1, $countprenomArray1)?></p>

        </div>
      </section>

      <section class="section_exo2_condition">

        <div class="div_exo2_conditions cards cardsConditions">
          <h2>Exo 9 Boucle Foreach</h2>
          <p>Crée un tableaux associatif avec 4 prénoms et l'âge de chaque personne. Chaque donnée du tableaux doit être annoncé. <?php exo9ForEachArray($PrenomAges) ?></p>
        </div>
      </section>

      <section class="section_exo3_condition">
        <div class="div_exo3_conditions cards cardsConditions">
          <h2>Test Exo Foreach Tableaux</h2>
          <p> <?php ?></p>
          <h2>Exo 10 Boucle Foreach Le Retour</h3>
          <p>Le retour du ForEach : tableau multidimensionnelle associatif avec 5 produits çi-dessous.</p>
        </div>
      </section>
    </div>


    <!-- Section 1 en ligne 1 exo -->
    <section class="section_exo1_variable">

      <div class="div_exo1_variable cards">
    
        <h2>Exo 10 : </h2>

        <p><?php exo10ForEachArray($Produits)?></p>

        <p></p>
      </div>

    </section>



    <!-- Section 4 en ligne 2 exo sur cards unique -->
    <section class="section_exo6_Switch">

      <div class="div_2exo_cards cards cardConditions">
    
        <div class="border-right-left">
          <h2>Exo 11 Tableau multidimensionnel associatif sous forme de tableaux</h2>
          <div> <?php exo11ForEachArray ($Produits2) ?></div>

        </div>

        <div class="border-right-left">


          <h2>Exo 12 Perso</h2>
            <p>Je rapelle ma fonction précédente ( exo 11 ) pour mettre en paramètre un autre tableaux (Exo 10).<?php exo11ForEachArray ($Produits)  ?></p>
        </div>
      </div>

    </section>


    <!-- Section 3 en ligne 2 exo -->
    <div class="ExoConditions">

      <section class="section_exo4_condition">
        <div class="div_exo4_conditions cards cardsConditions">
          <h2>Exo 13 fonction addition sur les arguments</h2>
          <p> On crée une fonction qui additionne en paramètre a et b. On met en paramètre 2 et 3.</p>
          <p> Le résultat est : <?php addition(2, 3) ?></p>
          
        </div>
      
      </section>


      <section class="section_exo5_condition">
        <div class="div_exo5_conditions cards cardsConditions">
        <h2>Exo 14 sur les fonctions</h2>
          <p>On appelle une fonction défini qui fait écho "..."</p>
          <p><?php prénomPerso($prénomPerso, $questionCommentVa) ?></p>
          <p> <?php ?></p>   
        </div>
      
      </section>

    </div>


    <!-- Section 5 en ligne 3 exo -->
    <div class="ExoConditions">
      <section class="section_exo1_condition">

        <div class="div_exo1_conditions cards cardsConditions">
          <h2>Exo 15 Passer des arguments par référence</h2>
          <p></p>
          <p><?php $xadd = 0;
          add3($xadd);
          echo '<br>Valeur en dehors de la fonction : ' .$xadd ;
          add3($xadd);
          ?></p>

        </div>
      </section>

      <section class="section_exo2_condition">

        <div class="div_exo2_conditions cards cardsConditions">
          <h2>Exo 16 L'instruction return</h2>
          <p> Exo sur le return comme son nom l'indique</p>
          <p> Fonction multecho avec un simple echo <?php multecho(1,2) ?></p>
          <p> Fonction multreturn, le return permet de stocker la variable et de pouvoir la re-utiliser partout. <?php echo multreturn(1,2) ?></p>
        </div>
      </section>

      <section class="section_exo3_condition">
        <div class="div_exo3_conditions cards cardsConditions">
          <h2>Exo 17 Return pour calculer des prix de TVA</h3>
          <p> On créer une fonction pour chaque taux de TVA, cela calculera un prix hors taxe en prix TTC. On peut mettre en argument n'importe quel integer.</p>
          <p>Fonction pour donner un prix TVA 20% : <?php AffichagePrixHT($PrixTVAa) ; prixTVA20($PrixTVAa); AffichagePrixTTC($PrixTVAa) ?> A CORRIGER </p> 
         
        </div>
      </section>
    </div>


    <!-- Section 3 en ligne 2 exo -->
    <div class="ExoConditions">

      <section class="section_exo4_condition">
        <div class="div_exo4_conditions cards cardsConditions">
          <h2>Exo 18 tableaux Warm Up comparatif de prix</h2>
          <p>On affiche un tableaux de prix et on y fait une différence de prix grâce à une fonction<?php exo11ForEachArray ($PrixWarmUp)  ?></p>
        </div>
      
      </section>


      <section class="section_exo5_condition">
        <div class="div_exo5_conditions cards cardsConditions">
          <h2>Exo 19 sur des Addition et le typage</h2>
          <p> On effectue une fonction addition et on test le typage de valeur qu'on met à l'intérieur.</p>
          <p>
          <?php additionB(3, 4)  ?>
          <?php additionB(3, 4.5)  ?>
          <?php additionB(3.5, 4.2)  ?>
          <?php additionB(3,'4Adrien')  ?>
          </p>
          <p> La fonction additionB(3,'Adrien') ne marche pas car il y a une chaine de caractère. Il faut dans se cas utiliser des directives de typage (ex : declare(strict_types=1)) pour éviter tout transtypage fait par Php. </p>
          <p>fonction multreturn ($a, $b):int {} ( pour demander des integer dans la fonction.</p>
        </div>
      </section>
    </div>


      <!-- Section 1 en ligne 1 exo -->
    <section class="section_exo1_variable">

      <div class="div_exo1_variable cards exo20">

        <h2>Exo 20 sur le formulaire de contact</h2>

        <p> On récupère les données tapé par l'utilisateur.<?php  ?></p>

        <form class="S'enregistrer" method="post" action="">
          <fieldset>
            <legend>S'enregistrer</legend>
            <p>
              <label for="prenomducontact"> Votre Prénom</label>
              <input type="text" name="prenomducontact" id="prenomducontact" maxlength="100" size="20" required >
            </p>
            <p>
              <label for="nomducontact"> Votre Nom</label>
              <input type="text" name="nomducontact" id="nomducontact" maxlength="20" size="23" required>
            </p>
            <p>
              <label for="mailducontact"> Votre Mail</label>
              <input type="email" name="mailducontact" id="mailducontact" maxlength="50" size="24" required>
            </p>

            <p>
              <label for="ageducontact"> Age</label>
              <input type="number" name="ageducontact" id="ageducontact" maxlength="3" size="3" required>
            </p>

            <p>
               <label for="Admincontact">Etes-vous un Admin ?</label> 
               <input type="radio" value="Admin" name="Admincontact" id="Admincontact">
                <label for="Admincontact">Ou un user sans aucun droit ?</label> 
               <input type="radio" value="Sous être" name="Admincontact" id="Admincontact">
            </p>


            <input type="submit" value="Envoyer">

          </fieldset>
		    </form>

        <p>Voici les infos tapé par l'utilisateur : <?php AffichageDonnéeUser() ?></p>

        <p>On test la faille XSS. On insère dans un input le script: < script>alert('Hacked !');<\script>. Une alerte JS s'affiche.</p>
      </div>

    </section>


    <!-- Section 4 en ligne 2 exo sur cards unique -->
    <section class="section_exo6_Switch">

      <div class="div_2exo_cards cards cardConditions">
    
        <div class="border-right-left">
          <h2>Exo 21 sur formulaire le retour</h2>

          <form class="Inscription21" method="post" action="">
            <legend>Inscription</legend>
            <p>
              <label for="pseudoducontact21">Pseudo</label>
              <input type="text" name="pseudoducontact21" id="pseudoducontact21" maxlength="100" size="20" required >
            </p>
            
            <p>
              <label for="mailducontact21">Votre Mail</label>
              <input type="email" name="mailducontact21" id="mailducontact21" maxlength="50" size="24" required>
            </p>

            <p>
              <label for="telducontact21">Votre Téléphone</label>
              <input type="number" name="telducontact21" id="telducontact21" maxlength="50" size="24" >
            </p>

            <p>
              <label for="motdepasseducontact21">Mot de passe</label>
              <input type="password" name="motdepasseducontact21" id="motdepasseducontact21" maxlength="20" size="20" required>
            </p>

            <p>
              <label for="motdepasseducontact21confirm">Confirmation du mot de passe</label>
              <input type="password" name="motdepasseducontact21confirm" id="motdepasseducontact21confirm" maxlength="20" size="20" required>
            </p>
          <input type="submit" value="Envoyer">

		    </form>
          <?php Form21() ?>
          <p></p>
        </div>

        <div class="border-right-left">
          <h2>Exo 22 Base de donnée. Le C du CRUD</h2>
          <p>On crée une base de donnée mycar_db. On y met 5 colonnes, ID, name, model, price et color. On fait la connexion avec la BDD avec une fonction. On créer une autre fonction pour insérer des donnée dans le tableaux SQL.</p>
          <p></p>

          <div class="FormInsertCar">
            <form class="InsertCar" method="post" action="">
              <legend>Insérer de nouvelles voiture dans la base de donnée :</legend>
              <p>
                <label for="NameCar">Nom de la voiture</label>
                <input type="text" name="NameCar" id="NameCar" maxlength="100" size="20" required>
              </p>
              
              <p>
                <label for="ModelCar">Modèle de voiture</label>
                <input type="text" name="ModelCar" id="ModelCar" maxlength="50" size="20" required>
              </p>

              <p>
                <label for="PriceCar">Prix de la voiture</label>
                <input type="number" name="PriceCar" id="PriceCar" maxlength="50" size="18" required>
              </p>

              <p>
                <label for="ColorCar">Couleur de la voiture</label>
                <input type="text" name="ColorCar" id="ColorCar" maxlength="20" size="17" required>
              </p>

              <input type="submit" value="Enregistrer">

            </form>
            

            <p><?php FormInsertCar() ?></p>
          </div>
        </div>


      </div>
    </section>

    <!-- Section 5 en ligne 3 exo -->
    <div class="ExoConditions">
      <section class="section_exo1_condition">

        <div class="div_exo1_conditions cards cardsConditions">
          <h2>Exo 23 Le R du CRUD</h2>
          <p>On affiche un tableau des données de la base de donnée sous forme de tableau</p>
          <p><?php exo23ArrayDuR($cars)  ?></p>

        </div>
      </section>

      <section class="section_exo2_condition">

        <div class="div_exo2_conditions cards cardsConditions">
          <h2>Exo 24 R CRUD V2</h2>
          <p> blbl <?php exo24ArrayDuR($cars)  ?></p>
        </div>
      </section>

      <section class="section_exo3_condition">
        <div class="div_exo3_conditions cards cardsConditions">
          <h2>Exo 25 R du CRUD V3</h3>
          <p>blblbl <?php  ?> </p> 
          <p>blblbl <?php ?> </p> 
         
        </div>
      </section>
    </div>


    <!-- Section 1 en ligne 1 exo -->
    <section class="section_exo1_variable">

      <div class="div_exo1_variable cards exo20">

        <h2>Exo 25 Bis An other Tableau</h2>

        <p> <?php exo25ArrayDuR ($cars)  ?></p>
        <p> <?php var_dump($cars) ?>/p>

        
      </div>

    </section>


    
    <script src="js/index.js"></script>
</body>
</html>