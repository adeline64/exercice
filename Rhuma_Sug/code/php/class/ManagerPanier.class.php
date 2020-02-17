<?php
/**
 * Created by PhpStorm.
 * User: Adeline
 * Date: 23/02/2019
 * Time: 09:45
 */

class ManagerPanier extends Manager{

	public function construct($mode='prod') {
		parent::__construct( $mode );
	}

	public function read($id){
		echo '<br>[debug]Dans "'.__FUNCTION__.'" [/debug]';
		$req = $this->db->prepare('SELECT * FROM panier WHERE id =:id');
		$req->bindValue('id', $id, PDO::PARAM_INT);
		$req->execute();
		$array = $req->fetch(PDO::FETCH_ASSOC);
		$panier = new panier($array);

		return $panier;
	}

	public function getById($id_utilisateur){
		$req = $this->db->prepare('SELECT * FROM panier WHERE id_utilisateur=:id_utilisateur');
		$req->bindValue('id_utilisateur',$id_utilisateur,PDO::PARAM_INT);
		$req->execute();
		
		return $req;
	}

	public function add( $data) {
		//bloc try/catch pour g�rer les exceptions
		//provenant de panier
		echo '<br>[debug]Dans "'.__FUNCTION__.'" [/debug]';
		debug('<br>[debug]Dans "'.__CLASS__."::".__FUNCTION__.'" [/debug]');
		debug($data);
		try {
			$panier = new panier( $data);
		} catch (LengthException $lengthException) {
			//cas longueur == 0
			throw new Exception($lengthException->GetMessage(),$lengthException->GetCode());
		} catch (Exception $exception) {
			//autre cas (mais pour nous invalide)
			throw new Exception($exception->GetMessage(),$exception->GetCode());
		}
		$req = $this->db->prepare('INSERT INTO panier (etat,id_utilisateur) VALUES(:etat,id_utilisateur)');
		$req->bindValue('etat', $panier->getEtat(), PDO::PARAM_INT);
		$req->bindValue('id_utilisateur', $panier->getId_utilisateur(), PDO::PARAM_INT);
		$req->execute();
		$id = $this->db->lastInsertId();
		$panier->setId($id);
		return $panier;
		echo '<pre>'.print_r($panier,true).'</pre>';
		debug('<br>[debug]Dans "'.__CLASS__."::".__FUNCTION__.'" [/debug]');
		debug($panier);
	}

	



}