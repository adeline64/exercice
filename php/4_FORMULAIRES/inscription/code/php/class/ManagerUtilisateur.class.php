<?php
/**
 * Created by PhpStorm.
 * User: Adeline
 * Date: 23/02/2019
 * Time: 09:45
 */

class ManagerUtilisateur extends Manager{

	public function construct($mode='prod') {
		parent::__construct( $mode );
	}


public function add( $data) {
		//bloc try/catch pour g�rer les exceptions
		//provenant de utilisateur
		echo '<br>[debug]Dans "'.__FUNCTION__.'" [/debug]';
		debug('<br>[debug]Dans "'.__CLASS__."::".__FUNCTION__.'" [/debug]');
		debug($data);
		try {
			$utilisateur = new utilisateur( $data);
		} catch (LengthException $lengthException) {
			//cas longueur == 0
			throw new Exception($lengthException->GetMessage(),$lengthException->GetCode());
		} catch (Exception $exception) {
			//autre cas (mais pour nous invalide)
			throw new Exception($exception->GetMessage(),$exception->GetCode());
		}
		$req = $this->db->prepare('INSERT INTO utilisateur (email,password) VALUES(:email,:password)');
		$req->bindValue('email', $utilisateur->getEmail(), PDO::PARAM_STR);
		$req->bindValue('password', password_hash($utilisateur->getPassword(),PASSWORD_BCRYPT));
		$req->execute();
		$id = $this->db->lastInsertId();
		$utilisateur->setId($id);
		return $utilisateur;
		echo '<pre>'.print_r($utilisateur,true).'</pre>';
		debug('<br>[debug]Dans "'.__CLASS__."::".__FUNCTION__.'" [/debug]');
		debug($utilisateur);
    }

    public function connecte($email,$password) {
		echo '<br>[debug]Dans "' . __FUNCTION__ . '" [/debug]';
		$req = $this->db->prepare( 'SELECT * FROM utilisateur WHERE email =:email' );
		$req->bindValue( 'email', $email );
		$req->execute();
		$data = $req->fetch();
		if ( empty( $data ) ) {
			throw new Exception( 'Mauvais email' );
		} else {
			$utilisateur = new utilisateur($data);
			if ( password_verify( $password, $utilisateur->getPassword() ) ) {
				
				//OK c'est le bon
				return $utilisateur;
			} else {
				//rallage
				throw new Exception( 'Mauvais mot de passe' );
			}
		}
	}
    
}