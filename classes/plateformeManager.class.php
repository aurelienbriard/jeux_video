<?php
class PlateformeManager{

  // connecteur à la BDD en propriété de l'objet
  private $pdo;

  // son constructeur avec en paramètre le connecteur à la BDD
  public function __construct($pdo){
    $this->pdo = $pdo;
  }

  // méthode pour ajouter une plateforme
  public function addPlateforme(Plateforme $plateforme){ // avec en paramètre un objet plateforme
    $add_plateforme = $this -> pdo -> prepare( 'INSERT INTO plateforme (nom_plateforme) VALUES (:nom_plateforme)' ); // je^prépare la requete
    $add_plateforme -> bindValue( ':nom_plateforme', $plateforme->getNomPlateforme(), PDO::PARAM_INT ); // j'affecte la valeur du formulaire au champ de la table
    $add_plateforme -> execute();
    $add_plateforme -> closeCursor();
    return ($add_plateforme-> rowCount() ); // retourne le nbre de lignes
  }

  // méthode pour modifier une plateforme
  public function updatePlateforme(Plateforme $plateforme){ // avec en paramètre un objet plateforme
    $update_plateforme = $this -> pdo -> prepare( 'UPDATE plateforme SET nom_plateforme = :nom_plateforme WHERE id_plateforme = '.$plateforme->getIdPlateforme() );
    $update_plateforme -> bindValue( ':nom_plateforme', $plateforme->getNomPlateforme(), PDO::PARAM_INT ); // j'affecte la valeur du formulaire au champ de la table
    $update_plateforme -> execute();
    $update_plateforme -> closeCursor();
    return ($update_plateforme-> rowCount() ); // retourne le nbre de lignes
  }

  // méthode pour supprimer une plateforme par son id
  public function deletePlateforme(Plateforme $plateforme){
    $delete_plateforme = $this -> pdo -> prepare( 'DELETE FROM plateforme WHERE id_plateforme = '.$plateforme->getIdPlateforme() );
    $delete_plateforme -> bindValue(':id_plateforme', $plateforme -> getIdPlateforme(), PDO:: PARAM_INT);
    $delete_plateforme -> execute();
    $delete_plateforme -> closeCursor();
    return ($delete_plateforme-> rowCount() ); // retourne le nbre de lignes
  }

  // méthode pour afficher une liste de plateforme
  public function getListPlateforme(){
    $list_plateforme = $this->pdo -> query('SELECT * FROM plateforme;');
    return $list_plateforme -> fetchAll(PDO::FETCH_ASSOC);
  }

  // méthode pour récupérer toutes les infos d'1 seule plateforme en fonction de son id
  public function getPlateformeById(){
    $getPlateformeById = $this->pdo -> query( 'SELECT * FROM plateforme WHERE id_plateforme = '.$plateforme->getIdPlateforme() );
    return $getPlateformeById -> fetch(PDO::FETCH_ASSOC);
  }

}
