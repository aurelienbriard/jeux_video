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
	?>

</body>
</html>