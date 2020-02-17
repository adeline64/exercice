<?php

class livraison{

    private $id;
    private $dateRecu;
    private $dateExpedition;
    private $id_commande;

    public function __construct( array $array =[] )
	{
		$this->hydrate($array);
	}
    
/**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
         * Get the value of dateRecu
         */ 
        public function getDateRecu()
        {
            return $this->dateRecu;
        }  
        
        /**
         * Get the value of dateExpedition
         */ 
        public function getDateExpedition()
        {
            return $this->dateExpedition;
        }

        /**
     * Get the value of id_commande
     */ 
    public function getId_commande()
    {
        return $this->id_commande;
    }


    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

        /**
         * Set the value of dateRecu
         *
         * @return  self
         */ 
        public function setDateRecu($dateRecu)
        {
            $this->dateRecu = $dateRecu;

            return $this;
        }
    
    /**
     * Set the value of dateExpedition
     *
     * @return  self
     */ 
    public function setDateExpedition($dateExpedition)
    {
        $this->dateExpedition = $dateExpedition;

        return $this;
    }


/**
     * Set the value of id_commande
     *
     * @return  self
     */ 
    public function setId_commande($id_commande)
    {
        $this->id_commande = $id_commande;

        return $this;
    }



    public function hydrate($array){
		foreach ($array as $key => $value) {
			$methodName = 'set'.ucfirst($key);
			if(method_exists($this, $methodName)){
				$this->$methodName($value);
			}
		}
    }
    
    
}