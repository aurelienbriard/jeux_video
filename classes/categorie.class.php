<?php

class Categorie{

	private $id_categorie;
	private $type;

	public function __construct(array $donnees){
		foreach ($donnees as $key => $value) {
			$method = 'set'.ucfirst($key);
			if (method_exists($this, $method)){
				$this->$method($value);
			}else{
				echo "La méthode n'a pas fonctionnée";
			}
		}
	}



//Getters

	public function getId_categorie(){return $this->id_categorie;}
	public function getType(){return $this->type;}

//Setters

	private function setId_categorie($id_categorie){
		$this->id_categorie = $id_categorie;
	}
	
	public function setType($type)
	{
		$this->type = $type;

		return $this;
	}

}