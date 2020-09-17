<?php 

class Jeux {

	private $id;
	private $titre;
	private $description;
	private $lien;
	private $categorie_id;
	private $editeur_id;
	private $pegi_id;

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

 //getters 

    public function getId(){return $this->id;}
    public function getTitre(){return $this->titre;}
    public function getDescription(){return $this->description;}
    public function getLien(){return $this->lien;}
    public function getCategorie_id(){return $this->categorie_id;}
    public function getEditeur_id(){return $this->editeur_id;}
    public function getPegi_id(){return $this->pegi_id;}
//Setters

    private function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    private function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    private function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    private function setLien($lien)
    {
        $this->lien = $lien;

        return $this;
    }

    private function setCategorieId($categorie_id)
    {
        $this->categorie_id = $categorie_id;

        return $this;
    }

    private function setEditeurId($editeur_id)
    {
        $this->editeur_id = $editeur_id;

        return $this;
    }

    private function setPegiId($pegi_id)
    {
        $this->pegi_id = $pegi_id;

        return $this;
    }
}