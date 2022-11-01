<?php

abstract class Highway {

protected array $currentVehicules;
protected int $nbLane;
protected int $maxSpeed;



public function __construct(int $nbLane, int $maxSpeed,)
{
    $this->nbLane = $nbLane;
    $this->maxSpeed = $maxSpeed;
}


/**
 * Get the value of currentVehicules
 */ 
public function getCurrentVehicules()
{
return $this->currentVehicules;
}

/**
 * Set the value of currentVehicules
 *
 * @return  self
 */ 
public function setCurrentVehicules($currentVehicules)
{
$this->currentVehicules = $currentVehicules;

return $this;
}


abstract public function getNbLane();


abstract public function setNbLane($nbLane);


abstract public function getMaxSpeed();

abstract public function setMaxSpeed($maxSpeed);

abstract public function addVehicule(Vehicle $vehicule);

}