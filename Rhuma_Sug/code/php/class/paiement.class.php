<?php

class paiement{

private $id;
private $valider;
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
 * Get the value of valider
 */ 
public function getValider()
{
return $this->valider;
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
 * Set the value of valider
 *
 * @return  self
 */ 
public function setValider($valider)
{
$this->valider = $valider;

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
