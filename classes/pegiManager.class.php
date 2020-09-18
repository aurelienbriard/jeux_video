<?php
class PegiManager{

// connecteur à la BDD en propriété de l'objet
	private $pdo;

	public function __construct($pdo){
		$this->pdo = $pdo;
	
}

public function add(Pegi $pegi){
		$add_pegi = $this->pdo->prepare('INSERT INTO pegi(pegi_nom) VALUES(:nom)');
				// bindValue — Associe une valeur à un paramètre
				// On associe les différentes variables aux marqueurs en respectant le type de chacunes

		$add_pegi->bindValue(':nom', $pegi->getPegi_nom(), PDO::PARAM_STR);
		
			    // Exécution de la requête
		$add_pegi->execute();
				// closeCursor() libère la connexion au serveur, permettant ainsi à d'autres requêtes SQL d'être exécutées
		$add_pegi->closeCursor();
		return ($add_pegi->rowCount());
	}

	public function update(Pegi $pegi){
		$update_pegi = $this->pdo->prepare('UPDATE pegi SET pegi_nom = :nom WHERE id_pegi = :id');
				// bindValue — Associe une valeur à un paramètre
				// On associe les différentes variables aux marqueurs en respectant le type de chacunes
		
		$update_pegi->bindValue(':nom', $pegi->getPegi_nom(), PDO::PARAM_STR);
		$update_pegi->bindValue(':id', $categorie->getId_pegi(), PDO::PARAM_INT);
			    // Exécution de la requête
		$update_pegi->execute();
				// closeCursor() libère la connexion au serveur, permettant ainsi à d'autres requêtes SQL d'être exécutées
		$update_pegi->closeCursor();
		return ($update_pegi->rowCount());
	}

	public function delete(Pegi $pegi){
		$delete_pegi = $this->pdo->prepare("DELETE FROM pegi WHERE id_pegi = :id");
	// bindParam — Lie un paramètre à un nom de variable spécifique
	// la différence avec bindValue c'est que l'on affecte non pas la valeur mais la variable en elle-même
	// cela peut permettre de modifier celle-ci entre plusieurs exécutions de requêtes successives.
		$delete_pegi->bindValue(':id', $pegi->getId_pegi(), PDO::PARAM_INT);
		$delete_pegi->execute();
	// closeCursor() libère la connexion au serveur, permettant ainsi à d'autres requêtes SQL d'être exécutées
		$delete_pegi->closeCursor();
		return ($delete_pegi->rowCount());
	}

	public function getListCategories(){
		$list_pegi = $this->pdo->query('SELECT * FROM pegi');
		return $list_pegi->fetchAll(PDO::FETCH_ASSOC);
	}
	
}