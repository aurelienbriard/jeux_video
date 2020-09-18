<!DOCTYPE html>
<html>
<head>
	<title>Formulaire de mise a jour d'une plateforme</title>
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

	?>

	<!-- Default form contact -->
	<form class="text-center border border-light p-5" action="controllerPlateforme.php" method="post">

		<p class="h4 mb-4">Modifier une plateforme</p>

		<!-- Plateforme -->
		<input type="text" id="defaultContactFormName" class="form-control mb-4" placeholder="Nom de la plateforme" name="update_nom_plateforme" required>

		<!-- Send button -->
		<button class="btn btn-info btn-block" type="submit">Valider</button>

	</form>
	<!-- Default form contact -->

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
