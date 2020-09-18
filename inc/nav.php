<!--Navbar-->
<nav class="navbar navbar-expand-lg navbar-dark info-color">

  <!-- Navbar brand -->
  <a class="navbar-brand" href="index.php">Jeux Vidéo</a>

  <!-- Collapse button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
    aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Collapsible content -->
  <div class="collapse navbar-collapse" id="basicExampleNav">

    <!-- Links -->
    <ul class="navbar-nav mr-auto">

      <!-- Dropdown Ajout-->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">Ajout</a>
        <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="ajout.php">Ajouter un jeux </a>
          <a class="dropdown-item" href="#">Ajouter un PEGI</a>
          <a class="dropdown-item" href="#">Ajouter une catégorie</a>
          <a class="dropdown-item" href="formAddPlateforme.php">Ajouter une plateforme</a>
          <a class="dropdown-item" href="#">Ajouter un éditeur</a>
        </div>
      </li>

      <!-- Dropdown Modification-->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">Modifier</a>
        <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Modifier un jeux </a>
          <a class="dropdown-item" href="#">Modifier un PEGI</a>
          <a class="dropdown-item" href="#">Modifier une catégorie</a>
          <a class="dropdown-item" href="formUpdatePlateforme.php">Modifier une plateforme</a>
          <a class="dropdown-item" href="#">Modifier un éditeur</a>
        </div>
      </li>

    </ul>

  </div>
  <!-- Collapsible content -->

</nav>
<!--/.Navbar-->
