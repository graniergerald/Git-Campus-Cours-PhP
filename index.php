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
          <p>Else et Elseif pour vérifier une condition de "inscrit" et "âge" : <?php exo2conditions($inscrit, $age) ?></p>
        </div>
      </section>

      <section class="section_exo3_condition">
        <div class="div_exo3_conditions cards cardsConditions">
          <h2>Exo 3 sur les conditions</h3>
          <p>Idem que l'exo 2 mais la condition est écris différemment : <?php exo3conditions($inscrit2, $age2) ?></p>
        </div>
      </section>
    </div>


  <!-- Section 3 en ligne 2 exo -->
    <div class="ExoConditions">

      <section class="section_exo4_condition">
        <div class="div_exo4_conditions cards cardsConditions">
          <h2>Exo 4 sur les conditions</h2>
          <p>On créer 4 rôles superadmin, admin, user et anonymous. En fonction du rôle donné ( mannuellement ), on affiche une phrase. ( plus tard cela pourras être associé à un réel rôle.<?php exo4conditions($superadmin, $admin, $user, $anonymous, $visiteur1) ?></p>
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
          <p>On crée 2 tableaux dans un tableaux et on selectionne les données à l'intérieur en se servant des index</p>
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


    <!-- Section 3 en ligne 2 exo -->
    <div class="ExoConditions">

      <section class="section_exo4_condition">
        <div class="div_exo4_conditions cards cardsConditions">
          <h2>Exo 11 sur...</h2>
          <p>On fait... blblbl<?php ?></p>
        </div>
      
      </section>


      <section class="section_exo5_condition">
        <div class="div_exo5_conditions cards cardsConditions">
          <h2>Exo 12 sur...</h2>
          <p>On fait.... vkvkvkvkv <?php ?></p>
        </div>
      
      </section>

    </div>

    
    <script src="js/index.js"></script>
</body>
</html>