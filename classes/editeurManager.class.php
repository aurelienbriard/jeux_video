<?php
class EditeurManager{

  // connecteur à la BDD en propriété de l'objet
  private $pdo;

  // son constructeur avec en paramètre le connecteur à la BDD
  public function __construct($pdo){
    $this->pdo = $pdo;
  }

  // méthode pour ajouter une editeur
  public function addEditeur(Editeur $editeur){ // avec en paramètre un objet editeur
    $add_editeur = $this -> pdo -> prepare( 'INSERT INTO editeur (nom_editeur, lien_editeur) VALUES (:nom_editeur, :lien_editeur )' ); // je prépare la requete
    $add_editeur -> bindValue( ':nom_editeur', $editeur->getNomEditeur(), PDO::PARAM_STR ); // j'affecte la valeur du formulaire au champ de la table
    $add_editeur -> bindValue( ':lien_editeur', $editeur->getLienEditeur(), PDO::PARAM_STR ); // j'affecte la valeur du formulaire au champ de la table
    $add_editeur -> execute();
    $add_editeur -> closeCursor();
    return ($add_editeur-> rowCount() ); // retourne le nbre de lignes
  }

  // méthode pour modifier une editeur
  public function updateEditeur(Editeur $editeur){ // avec en paramètre un objet editeur
    $update_editeur = $this -> pdo -> prepare( 'UPDATE editeur SET nom_editeur = :nom_editeur, lien_editeur = :lien_editeur WHERE id_editeur = '.$editeur->getIdEditeur() );
    $update_editeur -> bindValue( ':nom_editeur', $editeur->getNomEditeur(), PDO::PARAM_STR ); // j'affecte la valeur du formulaire au champ de la table
    $update_editeur -> bindValue( ':lien_editeur', $editeur->getLienEditeur(), PDO::PARAM_STR ); // j'affecte la valeur du formulaire au champ de la table
    $update_editeur -> execute();
    $update_editeur -> closeCursor();
    return ($update_editeur-> rowCount() ); // retourne le nbre de lignes
  }

  // méthode pour supprimer une editeur par son id
  public function deleteEditeur(Editeur $editeur){
    $delete_editeur = $this -> pdo -> prepare( 'DELETE FROM editeur WHERE id_editeur = '.$editeur->getIdEditeur() );
    $delete_editeur -> bindValue(':id_editeur', $editeur -> getIdEditeur(), PDO:: PARAM_INT);
    $delete_editeur -> execute();
    $delete_editeur -> closeCursor();
    return ($delete_editeur-> rowCount() ); // retourne le nbre de lignes
  }

  // méthode pour afficher une liste de editeur
  public function getListEditeur(){
    $list_editeur = $this->pdo -> query('SELECT * FROM editeur;');
    return $list_editeur -> fetchAll(PDO::FETCH_ASSOC);
  }

}
