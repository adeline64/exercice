<?php
/**
 * Created by PhpStorm.
 * User: Adeline
 * Date: 23/02/2019
 * Time: 09:45
 */

class ManagerProduits extends Manager{

	public function construct($mode='prod') {
		parent::__construct( $mode );
	}

	public function read($id){
		echo '<br>[debug]Dans "'.__FUNCTION__.'" [/debug]';
		$req = $this->db->prepare('SELECT * FROM produits WHERE id =:id');
		$req->bindValue('id', $id, PDO::PARAM_INT);
		$req->execute();
		$array = $req->fetch(PDO::FETCH_ASSOC);
		$produits = new produits($array);

		return $produits;
	}

	public function getAllProduits() {
		$produits = $this->db->query("SELECT * FROM produits");

		return $produits->fetchAll(PDO::FETCH_ASSOC);
	}


	public function add( $data) {
		echo '<br>[debug]Dans "'.__FUNCTION__.'" [/debug]';
		debug('<br>[debug]Dans "'.__CLASS__."::".__FUNCTION__.'" [/debug]');
		debug($data);
		//bloc try/catch pour g�rer les exceptions
		//provenant de restaurant
		try {
			$produits = new produits($data);
		} catch (LengthException $lengthException) {
			//cas longueur == 0
			throw new Exception($lengthException->GetMessage(),$lengthException->GetCode());
		} catch (Exception $exception) {
			//autre cas (mais pour nous invalide)
			throw new Exception($exception->GetMessage(),$exception->GetCode());
		}
		$req = $this->db->prepare('INSERT INTO produits (nom,couleur,prixHT,image,description) VALUES(:nom,:couleur,:prix,:id_marque,:image,:description)');
		$req->bindValue('nom', $produits->getNom(), PDO::PARAM_STR);
        $req->bindValue('couleur', $produits->getCouleur(), PDO::PARAM_STR);
        $req->bindValue('prixHT', $produits->getPrixHT(), PDO::PARAM_STR);
		$req->bindValue('image', $produits->getImage(), PDO::PARAM_STR);
		$req->bindValue('description', $produits->getDescription(), PDO::PARAM_STR);
		$req->execute();
		$id = $this->db->lastInsertId();
		$produits->setId($id);
		return $produits;
	}

	public function update($data){
        echo '<pre>'.print_r($data,true).'</pre>';

        echo '<br>[debug]SESSION';
        echo '<pre>'.print_r($_SESSION,true).'</pre>';
        $req = $this->db->prepare('UPDATE produits SET nom=:nom,couleur=:couleur,prixHT=:prixHT,image=:image,description=:description WHERE id =:id');
        $req->bindValue('id', $data->getId(), PDO::PARAM_INT);
        $req->bindValue('nom', $data->getCodeNom(), PDO::PARAM_STR);
        $req->bindValue('couleur', $data->getCouleur(), PDO::PARAM_STR);
        $req->bindValue('prix', $data->getPrix(), PDO::PARAM_STR);
		$req->bindValue('image',$data->getImage(), PDO::PARAM_STR);
		$req->bindValue('description',$data->getDescription(), PDO::PARAM_STR);

        if (! $req->execute()) {
	        echo "<br>[debug] Erreur";
        }
    }

	public function delete($id) {
		// =>voir  getLivre(id) pour modele
		$req = "DELETE FROM produits WHERE id=:id";
		$stmt = $this->db->prepare($req);
		$stmt->execute();
		if ($stmt->rowCount() == 1) {
			echo '[debug]OK 1 ligne inseree';
		} else {
			echo 'Erreur insertion donnees';
		}

	}

}