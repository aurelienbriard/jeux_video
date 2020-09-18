<?php

// Entité Editeur, la table Editeur avec ses propriétés
class Editeur {

  // je déclare des propriétés
  private $id_editeur;
  private $nom_editeur;
  private $lien_editeur;

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
  public function getIdEditeur() { return $this->id_editeur; }
  public function getNomEditeur() { return $this->nom_editeur; }
  public function getLienEditeur() { return $this->lien_editeur; }
  // ***************************************************************************

  // ****************************** Les setters ***********************************
  private function setId_Editeur($id_editeur) {  // private pour que l'on puisse l'utiliser mais pas le modifier
    $this->id_editeur = $id_editeur;
  }

  public function setNom_Editeur($nom_editeur) {
    if (is_string($nom_editeur)){
      $this->nom_editeur = $nom_editeur;
    } else { echo 'Il faut une chaine de caractères';}
  }

  public function setLien_Editeur($lien_editeur) {
    if (is_string($lien_editeur)){
      $this->lien_editeur = $lien_editeur;
    } else { echo 'Il faut une chaine de caractères';}
  }




}

