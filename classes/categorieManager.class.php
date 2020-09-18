<?php
class CategorieManager{

// connecteur à la BDD en propriété de l'objet
	private $pdo;

	public function __construct($pdo){
		$this->pdo = $pdo;
	
}

public function add(Categorie $categorie){
		$add_categorie = $this->pdo->prepare('INSERT INTO categorie(type) VALUES(:type)');
				// bindValue — Associe une valeur à un paramètre
				// On associe les différentes variables aux marqueurs en respectant le type de chacunes

		$add_categorie->bindValue(':type', $categorie->getType(), PDO::PARAM_STR);
		
			    // Exécution de la requête
		$add_categorie->execute();
				// closeCursor() libère la connexion au serveur, permettant ainsi à d'autres requêtes SQL d'être exécutées
		$add_categorie->closeCursor();
		return ($add_categorie->rowCount());
	}

	public function update(Categorie $categorie){
		$update_categorie = $this->pdo->prepare('UPDATE categorie SET type = :type WHERE id_categorie = :id');
				// bindValue — Associe une valeur à un paramètre
				// On associe les différentes variables aux marqueurs en respectant le type de chacunes
		
		$update_categorie->bindValue(':type', $categorie->getType(), PDO::PARAM_STR);
		$update_categorie->bindValue(':id', $categorie->getId(), PDO::PARAM_INT);
			    // Exécution de la requête
		$update_categorie->execute();
				// closeCursor() libère la connexion au serveur, permettant ainsi à d'autres requêtes SQL d'être exécutées
		$update_categorie->closeCursor();
		return ($update_categorie->rowCount());
	}

	public function delete(Categorie $categorie){
		$delete_categorie = $this->pdo->prepare("DELETE FROM categorie WHERE id_categorie = :id");
	// bindParam — Lie un paramètre à un nom de variable spécifique
	// la différence avec bindValue c'est que l'on affecte non pas la valeur mais la variable en elle-même
	// cela peut permettre de modifier celle-ci entre plusieurs exécutions de requêtes successives.
		$delete_categorie->bindValue(':id', $categorie->getId(), PDO::PARAM_INT);
		$delete_categorie->execute();
	// closeCursor() libère la connexion au serveur, permettant ainsi à d'autres requêtes SQL d'être exécutées
		$delete_categorie->closeCursor();
		return ($delete_categorie->rowCount());
	}

	public function getListCategorie(){
		$list_categorie = $this->pdo->query('SELECT * FROM categorie');
		return $list_categorie->fetchAll(PDO::FETCH_ASSOC);
	}
	
}