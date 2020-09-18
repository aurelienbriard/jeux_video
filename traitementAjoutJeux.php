<!DOCTYPE html>
<html lang="fr">
<head>
	<title>traitement ajout</title>
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

if(	isset($_POST['titre']) && !empty($_POST['titre']) &&
	isset($_POST['lien']) && !empty($_POST['lien']) &&
	isset($_POST['description']) && !empty($_POST['description']) &&
	isset($_POST['categorie_id']) && !empty($_POST['categorie_id']) &&
	isset($_POST['editeur_id']) && !empty($_POST['editeur_id']) &&
	isset($_POST['pegi_id']) && !empty($_POST['pegi_id']) ){


	$jeux = new Jeux($_POST);
	$jeuxManager = new JeuxManager($bdd);
	$ajout_jeux = $jeuxManager->add($jeux);

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