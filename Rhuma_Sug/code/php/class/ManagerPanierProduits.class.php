<?php
/**
 * Created by PhpStorm.
 * User: Adeline
 * Date: 23/02/2019
 * Time: 09:45
 */

class ManagerPanierProduits extends Manager{

	public function construct($mode='prod') {
		parent::__construct( $mode );
	}

	public function read($id){
		echo '<br>[debug]Dans "'.__FUNCTION__.'" [/debug]';
		$req = $this->db->prepare('SELECT * FROM PanierProduits WHERE id =:id');
		$req->bindValue('id', $id, PDO::PARAM_INT);
		$req->execute();
		$array = $req->fetch(PDO::FETCH_ASSOC);
		$produits = new produits($array);

		return $produits;
	}



	public function add( $data) {
		echo '<br>[debug]Dans "'.__FUNCTION__.'" [/debug]';
		debug('<br>[debug]Dans "'.__CLASS__."::".__FUNCTION__.'" [/debug]');
		debug($data);
		//bloc try/catch pour g�rer les exceptions
		//provenant de restaurant
		try {
			$PanierProduits = new PanierProduits($data);
		} catch (LengthException $lengthException) {
			//cas longueur == 0
			throw new Exception($lengthException->GetMessage(),$lengthException->GetCode());
		} catch (Exception $exception) {
			//autre cas (mais pour nous invalide)
			throw new Exception($exception->GetMessage(),$exception->GetCode());
		}
		$req = $this->db->prepare('INSERT INTO PanierProduits (id_panier,quantite) VALUES(:id_panier,:quantite)');
		$req->bindValue('id_panier', $produits->getId_panier(), PDO::PARAM_INT);
        $req->bindValue('quantite', $produits->getQuantite(), PDO::PARAM_STR);
		$req->execute();
		$id = $this->db->lastInsertId();
		$produits->setId($id);
		return $produits;
	}

}