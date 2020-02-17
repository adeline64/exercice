<?php
/**
 * Created by PhpStorm.
 * User: Adeline
 * Date: 23/02/2019
 * Time: 09:45
 */

class ManagerHabiter extends Manager{

	public function construct($mode='prod') {
		parent::__construct( $mode );
	}

	public function read($id){
		echo '<br>[debug]Dans "'.__FUNCTION__.'" [/debug]';
		$req = $this->db->prepare('SELECT * FROM habiter WHERE id =:id');
		$req->bindValue('id', $id, PDO::PARAM_INT);
		$req->execute();
		$array = $req->fetch(PDO::FETCH_ASSOC);
		$habiter = new habiter($array);

		return $habiter;
	}

	public function add( $data) {
		//bloc try/catch pour g�rer les exceptions
		//provenant de paiement
		echo '<br>[debug]Dans "'.__FUNCTION__.'" [/debug]';
		debug('<br>[debug]Dans "'.__CLASS__."::".__FUNCTION__.'" [/debug]');
		debug($data);
		try {
			$habiter = new habiter( $data);
		} catch (LengthException $lengthException) {
			//cas longueur == 0
			throw new Exception($lengthException->GetMessage(),$lengthException->GetCode());
		} catch (Exception $exception) {
			//autre cas (mais pour nous invalide)
			throw new Exception($exception->GetMessage(),$exception->GetCode());
		}
		$req = $this->db->prepare('INSERT INTO habiter (id_utilisateur) VALUES(:id_utilisateur)');
        $req->bindValue('id_utilisateur', $habiter->getId_utilisateur(), PDO::PARAM_INT);
		$req->execute();
		$id = $this->db->lastInsertId();
		$habiter->setId($id);
		return $habiter;
		echo '<pre>'.print_r($habiter,true).'</pre>';
		debug('<br>[debug]Dans "'.__CLASS__."::".__FUNCTION__.'" [/debug]');
		debug($habiter);
	}

	public function update($data){
        echo '<pre>'.print_r($data,true).'</pre>';
		debug('<br>[debug]Dans "'.__CLASS__."::".__FUNCTION__.'" [/debug]');
		debug($data);
        echo '<br>[debug]SESSION';
        echo '<pre>'.print_r($_SESSION,true).'</pre>';
        $req = $this->db->prepare('UPDATE habiter SET id_utilisateur=:id_utilisateur WHERE id =:id');
        $req->bindValue('id', $data->getId(), PDO::PARAM_INT);
        $req->bindValue('id_utilisateur', $data->getId_utilisateur(), PDO::PARAM_INT);
        if (! $req->execute()) {
	        echo "<br>[debug] Erreur";
        }
	}

	public function delete($id) {
		$req = "DELETE FROM habiter WHERE id=:id";
		$stmt = $this->db->prepare($req);
		$stmt->execute();
		if ($stmt->rowCount() == 1) {
			echo '[debug]OK 1 ligne inseree';
		} else {
			echo 'Erreur insertion donnees';
		}

	}



}