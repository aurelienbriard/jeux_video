<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Traitement du formulaire AddPlateforme</title>
	<meta charset="utf-8">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
	<!-- Google Fonts -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
	<!-- Bootstrap core CSS -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
	<!-- Material Design Bootstrap -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
</head>
<body>

<?php

	spl_autoload_register(function($classe) {
		require 'classes/' .$classe. '.class.php';
	});

	require_once'inc/connexion.php';
	require_once 'inc/nav.php';

	// ******************************** ajouter une plateforme *****************************
	if(	isset($_POST['add_nom_plateforme']) && !empty($_POST['add_nom_plateforme']) ){

		$plateforme = new Plateforme($_POST);
		$plateformeManager = new PlateformeManager($bdd);
		$ajout_plateforme = $plateformeManager->addPlateforme($plateforme);

		header("Location: index.php");
	}

	// ********************************* modifier une plateforme ***************************
	if(	isset($_POST['update_nom_plateforme']) && !empty($_POST['update_nom_plateforme']) ){

		$plateforme = new Plateforme($_POST);
		$plateformeManager = new PlateformeManager($bdd);
		$update_plateforme = $plateformeManager->updatePlateforme($plateforme);

		header("Location: index.php");

	}


?>

<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>




</body>
</html>
