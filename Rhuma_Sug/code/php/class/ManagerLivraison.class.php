<?php
/**
 * Created by PhpStorm.
 * User: Adeline
 * Date: 23/02/2019
 * Time: 09:45
 */

class ManagerLivraison extends Manager{

	public function construct($mode='prod') {
		parent::__construct( $mode );
	}

	public function read($id){
		echo '<br>[debug]Dans "'.__FUNCTION__.'" [/debug]';
		$req = $this->db->prepare('SELECT * FROM livraison WHERE id =:id');
		$req->bindValue('id', $id, PDO::PARAM_INT);
		$req->execute();
		$array = $req->fetch(PDO::FETCH_ASSOC);
		$livraison = new livraison($array);

		return $livraison;
	}

	public function add( $data) {
		//bloc try/catch pour g�rer les exceptions
		//provenant de paiement
		echo '<br>[debug]Dans "'.__FUNCTION__.'" [/debug]';
		debug('<br>[debug]Dans "'.__CLASS__."::".__FUNCTION__.'" [/debug]');
		debug($data);
		try {
			$livraison = new livraison( $data);
		} catch (LengthException $lengthException) {
			//cas longueur == 0
			throw new Exception($lengthException->GetMessage(),$lengthException->GetCode());
		} catch (Exception $exception) {
			//autre cas (mais pour nous invalide)
			throw new Exception($exception->GetMessage(),$exception->GetCode());
		}
		$req = $this->db->prepare('INSERT INTO livraison (dateRecu, dateExpedition, id_commande) VALUES(:dateRecu,:dateExpedition,:id_commande)');
        $req->bindValue('dateRecu', $livraison->getDateRecu(), PDO::PARAM_STR);
        $req->bindValue('dateExpedition', $livraison->getDateExpedition(), PDO::PARAM_STR);
        $req->bindValue('id_commande',$livraison->getId_commande(),PDO::PARAM_INT);
		$req->execute();
		$id = $this->db->lastInsertId();
		$livraison->setId($id);
		return $livraison;
		echo '<pre>'.print_r($livraison,true).'</pre>';
		debug('<br>[debug]Dans "'.__CLASS__."::".__FUNCTION__.'" [/debug]');
		debug($livraison);
	}

	public function update($data){
        echo '<pre>'.print_r($data,true).'</pre>';
		debug('<br>[debug]Dans "'.__CLASS__."::".__FUNCTION__.'" [/debug]');
		debug($data);
        echo '<br>[debug]SESSION';
        echo '<pre>'.print_r($_SESSION,true).'</pre>';
        $req = $this->db->prepare('UPDATE livraison SET dateRecu=:dateRecu, dateExpedition=:dateExpedition,id_commande=:id_commande WHERE id =:id');
        $req->bindValue('id', $data->getId(), PDO::PARAM_INT);
        $req->bindValue('dateRecu', $data->getDateRecu(), PDO::PARAM_STR);
        $req->bindValue('dateExpedition', $data->getDateExpedition(), PDO::PARAM_STR);
        $req->bindValue('id_commande', $data->getId_commande(), PDO::PARAM_INT);
        if (! $req->execute()) {
	        echo "<br>[debug] Erreur";
        }
	}

	public function delete($id) {
		$req = "DELETE FROM livraison WHERE id=:id";
		$stmt = $this->db->prepare($req);
		$stmt->execute();
		if ($stmt->rowCount() == 1) {
			echo '[debug]OK 1 ligne inseree';
		} else {
			echo 'Erreur insertion donnees';
		}

	}



}