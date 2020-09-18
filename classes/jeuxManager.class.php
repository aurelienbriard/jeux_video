<?php
class JeuxManager{

// connecteur à la BDD en propriété de l'objet
	private $pdo;

	public function __construct($pdo){
		$this->pdo = $pdo;
	
}

public function add(Jeux $jeux){
		$add_jeux = $this->pdo->prepare('INSERT INTO jeux(titre, description, lien, categorie_id, editeur_id, pegi_id ) VALUES(:titre, :description, :lien, :categorie_id, :editeur_id, :pegi_id)');
				// bindValue — Associe une valeur à un paramètre
				// On associe les différentes variables aux marqueurs en respectant le type de chacunes

		$add_jeux->bindValue(':titre', $jeux->getTitre(), PDO::PARAM_STR);
		$add_jeux->bindValue(':description', $jeux->getDescription(), PDO::PARAM_STR);
		$add_jeux->bindValue(':lien', $jeux->getLien(), PDO::PARAM_STR);
		$add_jeux->bindValue(':categorie_id', $jeux->getCategorie_id(), PDO::PARAM_INT);
		$add_jeux->bindValue(':editeur_id', $jeux->getEditeur_id(), PDO::PARAM_INT);
		$add_jeux->bindValue(':pegi_id', $jeux->getPegi_id(), PDO::PARAM_INT);

		
			    // Exécution de la requête
		$add_jeux->execute();
				// closeCursor() libère la connexion au serveur, permettant ainsi à d'autres requêtes SQL d'être exécutées
		$add_jeux->closeCursor();
		return ($add_jeux->rowCount());
	}

	public function update(Jeux $jeux){
		$update_jeux = $this->pdo->prepare('UPDATE jeux SET titre = :titre, description = :description, lien = :lien, categorie_id = :categorie_id, editeur_id = :editeur_id, pegi_id = :pegi_id WHERE id_jeux = :id');
				// bindValue — Associe une valeur à un paramètre
				// On associe les différentes variables aux marqueurs en respectant le type de chacunes

		$update_jeux->bindValue(':id', $jeux->getId_jeux(), PDO::PARAM_INT);
		$update_jeux->bindValue(':titre', $jeux->getTitre(), PDO::PARAM_STR);
		$update_jeux->bindValue(':description', $jeux->getDescription(), PDO::PARAM_STR);
		$update_jeux->bindValue(':lien', $jeux->getLien(), PDO::PARAM_STR);
		$update_jeux->bindValue(':categorie_id', $jeux->getCategorie_id(), PDO::PARAM_INT);
		$update_jeux->bindValue(':editeur_id', $jeux->getEditeur_id(), PDO::PARAM_INT);
		$update_jeux->bindValue(':pegi_id', $jeux->getPegi_id(), PDO::PARAM_INT);

			    // Exécution de la requête
		$update_jeux->execute();
				// closeCursor() libère la connexion au serveur, permettant ainsi à d'autres requêtes SQL d'être exécutées
		$update_jeux->closeCursor();
		return ($update_jeux->rowCount());
	}

	public function delete(Jeux $jeux){
		$delete_jeux = $this->pdo->prepare("DELETE FROM jeux WHERE id_jeux = :id");
	// bindParam — Lie un paramètre à un nom de variable spécifique
	// la différence avec bindValue c'est que l'on affecte non pas la valeur mais la variable en elle-même
	// cela peut permettre de modifier celle-ci entre plusieurs exécutions de requêtes successives.
		$delete_jeux->bindValue(':id', $pegi->getId_jeux(), PDO::PARAM_INT);
		$delete_jeux->execute();
	// closeCursor() libère la connexion au serveur, permettant ainsi à d'autres requêtes SQL d'être exécutées
		$delete_jeux->closeCursor();
		return ($delete_jeux->rowCount());
	}

	public function getListJeux(){
		$list_jeux = $this->pdo->query('SELECT * FROM jeux');
		return $list_jeux->fetchAll(PDO::FETCH_ASSOC);
	}
	
}