<?php

// Entité PlateformeSortie, la table PlateformeSortie avec ses propriétés
class PlateformeSortie {

  // je déclare des propriétés
  private $id_sortie;
  private $date_sortie;
  private $plateforme_id;
  private $jeux_id;

  // constructeur de la classe avec un tableau de données en argument
  public function __construct( array $donnees){
    foreach ($donnees as $key => $value) { // je boucle sur le tableau
      $methode = 'set'.ucfirst($key); // j'appel le setter dans une fonction
      if (method_exists($this, $methode)){ // si le setter existe
        $this -> $methode($value); // on appel le setter
      }
    }
  }

  // ********************************** les getters ***************************
  public function getIdSortie() { return $this->id_sortie; }
  public function getDateSortie() { return $this->date_sortie; }
  public function getPlateformeId() { return $this->plateforme_id; }
  public function getJeuxId() { return $this->jeux_id; }
  // ***************************************************************************

  // ****************************** Les setters ***********************************
  private function setId_Sortie($id_sortie) { // private pour que l'on puisse l'utiliser mais pas le modifier
    $this->id_sortie = $id_sortie;
  }

  public function setDate_Sortie($date_sortie) {
      $this->date_sortie = $date_sortie;
  }

  private function setPlateforme_id($plateforme_id) {
    $this->plateforme_id = $plateforme_id;
  }

  private function setJeux_id($jeux_id) {
    $this->jeux_id = $jeux_id;
  }

}

