<?php

class Pegi{

	private $id_pegi;
	private $pegi_nom;

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

	public function getId_pegi(){return $this->id_pegi;}
	public function getNom(){return $this->pegi_nom;}

//Setters

	private function setId_pegi($id_pegi){
		$this->id_pegi = $id_pegi;
	}
	
	public function setNom($pegi_nom)
	{
		$this->pegi_nom = $pegi_nom;

		return $this;
	}

}