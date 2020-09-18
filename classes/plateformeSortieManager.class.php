<?php
class PlateformeSortieManager{

  // connecteur à la BDD en propriété de l'objet
  private $pdo;

  // son constructeur avec en paramètre le connecteur à la BDD
  public function __construct($pdo){
    $this->pdo = $pdo;
  }

  // méthode pour ajouter une plateformeSortie
  public function addPlateformeSortie(PlateformeSortie $plateformeSortie){ // avec en paramètre un objet plateformeSortie
    $add_plateformeSortie = $this -> pdo -> prepare( 'INSERT INTO plateforme_sortie ( date_sortie, plateforme_id, jeux_id ) VALUES ( :date_sortie, :plateforme_id, :jeux_id )' ); // je^prépare la requete
    $add_plateformeSortie -> bindValue( ':date_sortie', $plateformeSortie->getDateSortie(), PDO::PARAM_INT ); // j'affecte la valeur du formulaire au champ de la table
    $add_plateformeSortie -> bindValue( ':plateforme_id', $plateformeSortie->getPlateformeId(), PDO::PARAM_INT ); // j'affecte la valeur du formulaire au champ de la table
    $add_plateformeSortie -> bindValue( ':jeux_id', $plateformeSortie->getJeuxId(), PDO::PARAM_INT ); // j'affecte la valeur du formulaire au champ de la table
    $add_plateformeSortie -> execute();
    $add_plateformeSortie -> closeCursor();
    return ($add_plateformeSortie-> rowCount() ); // retourne le nbre de lignes
  }

  // méthode pour modifier une plateformeSortie
  public function updatePlateformeSortie(PlateformeSortie $plateformeSortie){ // avec en paramètre un objet plateformeSortie
    $update_plateformeSortie = $this -> pdo -> prepare( 'UPDATE plateforme_sortie SET date_sortie = :date_sortie, plateforme_id = :plateforme_id, jeux_id = :jeux_id WHERE id_sortie = '.$plateformeSortie->getIdSortie() );
    $update_plateformeSortie -> bindValue( ':date_sortie', $plateformeSortie->getDateSortie(), PDO::PARAM_INT ); // j'affecte la valeur du formulaire au champ de la table
    $update_plateformeSortie -> bindValue( ':plateforme_id', $plateformeSortie->getPlateformeId(), PDO::PARAM_INT ); // j'affecte la valeur du formulaire au champ de la table
    $update_plateformeSortie -> bindValue( ':jeux_id', $plateformeSortie->getJeuxId(), PDO::PARAM_INT ); // j'affecte la valeur du formulaire au champ de la table
    $update_plateformeSortie -> execute();
    $update_plateformeSortie -> closeCursor();
    return ($update_plateformeSortie-> rowCount() ); // retourne le nbre de lignes
  }

  // méthode pour supprimer une plateformeSortie par son id
  public function deletePlateformeSortie(PlateformeSortie $plateformeSortie){
    $delete_plateformeSortie = $this -> pdo -> prepare( 'DELETE FROM plateforme_sortie WHERE id_sortie = '.$plateformeSortie->getIdSortie() );
    $delete_plateformeSortie -> bindValue( ':date_sortie', $plateformeSortie->getDateSortie(), PDO::PARAM_INT ); // j'affecte la valeur du formulaire au champ de la table
    $delete_plateformeSortie -> bindValue( ':plateforme_id', $plateformeSortie->getPlateformeId(), PDO::PARAM_INT ); // j'affecte la valeur du formulaire au champ de la table
    $delete_plateformeSortie -> bindValue( ':jeux_id', $plateformeSortie->getJeuxId(), PDO::PARAM_INT ); // j'affecte la valeur du formulaire au champ de la table
    $delete_plateformeSortie -> execute();
    $delete_plateformeSortie -> closeCursor();
    return ($delete_plateformeSortie-> rowCount() ); // retourne le nbre de lignes
  }

  // méthode pour afficher une liste de plateformeSortie
  public function getListPlateformeSortie(){
    $list_plateformeSortie = $this->pdo -> query('SELECT * FROM plateforme_sortie;');
    return $list_plateformeSortie -> fetchAll(PDO::FETCH_ASSOC);
  }

}
