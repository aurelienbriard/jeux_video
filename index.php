<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Jeux Video</title>
	<meta charset="utf-8">
</head>
<body>
<?php

	spl_autoload_register(function($classe) {
		require 'classes/' .$classe. '.class.php';
	});

	require_once'inc/connexion.php';

  //code de test
  $plateformeManager = new PlateformeManager($bdd);

  // nouvel objet plateforme
  $plateforme = new Plateforme([
    'id_plateforme' => 10,
    'nom_plateforme' => 'premiere plateforme'
  ]);

  echo '<pre/>'; var_dump($plateforme);

  // 1 - test de la méthode addPlateforme
  //if( $plateformeManager->addPlateforme($plateforme) ) {echo 'plateforme ajoutée';} else { echo 'plateforme pas ajoutée';}

  // 2 - test de la méthode updatePlateforme
  //if( $plateformeManager -> updatePlateforme($plateforme) ) {echo 'plateforme modifiée';} else { echo 'plateforme pas modifiée';}

  // 3 - test de la méthode deletePlateforme
  //if( $plateformeManager -> deletePlateforme($plateforme) ) {echo 'plateforme effacée';} else { echo 'plateforme pas effacée';}

  // 4 - Afficher une list de plateforme
  $listPlateforme = $plateformeManager->getListPlateforme();
  var_dump($listPlateforme);

	?>

</body>
</html>
