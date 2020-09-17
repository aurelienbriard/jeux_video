<?php

// Entité Plateforme, la table plateforme avec ses propriétés
class Plateforme {

  // je déclare des propriétés
  private $id_plateforme;
  private $nom_plateforme;

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
  public function getIdPlateforme() { return $this->id_plateforme; }
  public function getNomPlateforme() { return $this->nom_plateforme; }
  // ***************************************************************************

  // ****************************** Les setters ***********************************
  private function setId_Plateforme($id_plateforme) { // pour que l'on puisse l'utiliser mais pas le modifier
    $this->id_plateforme = $id_plateforme;
  }

  public function setNom_Plateforme($nom_plateforme) {
    if (is_string($nom_plateforme)){
      $this->nom_plateforme = $nom_plateforme;
    } else { echo 'Il faut une chaine de caractères';}
  }

}

