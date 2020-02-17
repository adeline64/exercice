<?php

class PanierProduits {


	private $id;
	private $id_panier;
	private $quantite;

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

    	/**
	 * Get the value of id_panier
	 */ 
	public function getId_panier()
	{
		return $this->id_panier;
	}
    
    /**
	 * Get the value of quantite
	 */ 
	public function getQuantite()
	{
		return $this->quantite;
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
    
    /**
	 * Set the value of id_panier
	 *
	 * @return  self
	 */ 
	public function setId_panier($id_panier)
	{
		$this->id_panier = $id_panier;

		return $this;
	}

	

	/**
	 * Set the value of quantite
	 *
	 * @return  self
	 */ 
	public function setQuantite($quantite)
	{
		$this->quantite = $quantite;

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


	