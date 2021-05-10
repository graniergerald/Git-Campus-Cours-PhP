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

    <section class="section_exo1_variable">

      <div class="div_exo1_variable cards">
    
        <h2>Exo 1 sur les variables</h2>

        <p class="presentation"> On appel les variables $presentation et $presentation2 pour des tests : <?php echo $presentation ?> ; <?php echo $presentation2 ?></p>

        <p class="stockfruits">On crée des variables sur des Oranges et des Pèches, on affiche le stock et on fait le cumul des 2 stocks : <?php echo $stock ?></p>
      </div>

    </section>

    <div class="ExoConditions">
      <section class="section_exo1_condition">

        <div class="div_exo1_conditions cards cardsConditions">
          <h2>Exo 1 sur les conditions</h2>
          <p>Exo sur les if...else</p>
          <p><?php exo1conditions($x); ?></p>

        </div>
      </section>

      <section class="section_exo2_condition">

        <div class="div_exo2_conditions cards cardsConditions">
          <h2>Exo 2 sur les conditions</h2>
          <p><?php exo2conditions($inscrit, $age) ?></p>
        </div>
      </section>
    </div>
    
    <script src="js/index.js"></script>
</body>
</html>