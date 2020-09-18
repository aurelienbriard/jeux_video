<!DOCTYPE html>
<html>
<head>
	<title>Formulaire ajout</title>
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

	$managerCategorie = new CategorieManager($bdd);
	$categorie_tab = $managerCategorie->getListCategorie();

	$managerEditeur = new EditeurManager($bdd);
	$editeur_tab = $managerEditeur->getListEditeur();

	$managerPegi = new PegiManager($bdd);
	$pegi_tab = $managerPegi->getListPegi();
	
	?>

	<!-- Default form contact -->
	<form class="text-center border border-light p-5" action="traitementAjoutJeux.php" method="post">

		<p class="h4 mb-4">Ajouter un jeux</p>

		<!-- Titre -->
		<input type="text" id="defaultContactFormName" class="form-control mb-4" placeholder="Titre" name="titre" required>

		<!-- Description -->
		<div class="form-group">
			<textarea class="form-control rounded-0" id="exampleFormControlTextarea2" rows="3" placeholder="Description" name="description" required></textarea>
		</div>

		<!-- Lien -->
		<input type="text" id="defaultContactFormEmail" class="form-control mb-4" placeholder="Lien vers le site du jeux" name="lien" required>

		<!-- Catégorie -->
		<label>Catégorie</label>
		<select class="browser-default custom-select mb-4" name="categorie_id" required>
			<option value="" disabled>Choisissez une catégorie</option>
			<?php foreach ($categorie_tab as $key => $value) {  ?>
				<option value="<?=$value['id_categorie'];?>"><?=$value['type'];?></option>
			<?php }
			?>
		</select>

		<!-- Editeur -->
		<label>Editeur</label>
		<select class="browser-default custom-select mb-4" name="editeur_id" required>
			<option value="" disabled>Choisissez un éditeur</option>
			<?php foreach ($editeur_tab as $key => $value) {  ?>
				<option value="<?=$value['id_editeur'];?>"><?=$value['nom_editeur'];?></option>
			<?php }
			?>
		</select>

		<!-- PEGI -->
		<label>PEGI</label>
		<select class="browser-default custom-select mb-4" name="pegi_id" required>
			<option value="" disabled>Choisissez un PEGI</option>
			<?php foreach ($pegi_tab as $key => $value) {  ?>
				<option value="<?=$value['id_pegi'];?>"><?=$value['pegi_nom'];?></option>
			<?php }
			?>
		</select>



		<!-- Send button -->
		<button class="btn btn-info btn-block" type="submit">Ajouter</button>

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