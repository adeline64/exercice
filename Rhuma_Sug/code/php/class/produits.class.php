<?php

class produits {


	private $id;
	private $nom;
	private $couleur;
	private $prixHT;
	private $image;
	private $description;

	public function __construct( array $array =[] )
	{
		$this->hydrate($array);
	}

// LES GETTERS

	/**
	 * @return mixed
	 */
	public function getId() {
		return $this->id;
	}


	public function getNom() {
		return $this->nom;
	}

	public function getCouleur() {
		return $this->couleur;
	}

    
    /**
	 * Get the value of id_marque
	 */ 
	public function getId_marque()
	{
		return $this->id_marque;
	}

	public function getImage()
	{
		return $this->image;
	}

	/**
	 * Get the value of prixHT
	 */ 
	public function getPrixHT()
	{
		return $this->prixHT;
	}

	/**
	 * Get the value of description
	 */ 
	public function getDescription()
	{
		return $this->description;
	}

	

	// LES SETTERS


	/**
	 * @param mixed $id
	 */
	public function setId( $id ) {
		$id = (int) $id;
		if ( $id > 0 ) {

			$this->id = $id;
		}
	}

	public function setNom( $nom ){
		if (strlen(trim($nom)) > 0)
			//strlen = Calcule la taille d'une cha�ne
			// trim = Supprime les espaces (ou d'autres caract�res) en d�but et fin de cha�ne
		{
			if (strpos($nom,"#") !== false)
				// strpos = Cherche la position de la premi�re occurrence dans une cha�ne
			{
				throw new Exception("Le nom ne peut pas avoir de caracteres speciaux");
			}
			if (preg_match("/[0-9]/", "$nom"))
				// preg_match = sert ici pour les chiffres
			{
				throw new Exception("Le nom ne peut pas avoir de chiffre");
			}
			else
			{
				//echo "la cha�ne $nom est correcte";
				$this->nom = $nom;
			}
		}
	}

/**
	 * Set the value of couleur
	 *
	 * @return  self
	 */ 
	public function setCouleur($couleur)
	{
		$this->couleur = $couleur;

		return $this;
    }
    
    /**
	 * Set the value of prixHT
	 *
	 * @return  self
	 */ 
	public function setPrixHT($prixHT)
	{
		$this->prixHT = $prixHT;

		return $this;
	}


	public function setImage($image)
	{
		$this->image = $image;

		return $this;
	}

	/**
	 * Set the value of description
	 *
	 * @return  self
	 */ 
	public function setDescription($description)
	{
		$this->description = $description;

		return $this;
	}

	// HYDRATATION

	public function hydrate($array){
		foreach ($array as $key => $value) {
			$methodName = 'set'.ucfirst($key);
			if(method_exists($this, $methodName)){
				$this->$methodName($value);
			}
		}

	

	
	}


	

	

	

	

	

	

	
}


	