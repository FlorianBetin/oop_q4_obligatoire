<?php
require_once 'Highway.php';

final class MotorWay extends Highway 
{

    /**
     * Get the value of nbLane
     */ 
    public function getNbLane()
    {
        return $this->nbLane;
    }

    /**
     * Set the value of nbLane
     *
     * @return  self
     */ 
    public function setNbLane($nbLane)
    {
        $this->nbLane = $nbLane;

        return $this;
    }

    /**
     * Get the value of maxSpeed
     */ 
    public function getMaxSpeed()
    {
        return $this->maxSpeed;
    }

    /**
     * Set the value of maxSpeed
     *
     * @return  self
     */ 
    public function setMaxSpeed($maxSpeed)
    {
        $this->maxSpeed = $maxSpeed;

        return $this;
    }

    public function addVehicule(Vehicle $vehicle)
    {
        if($vehicle instanceof Bike)
        {
            return "This type of vehicle is forbidden on this road <br><br>";
        } else {
            $this->currentVehicules[] = $vehicle;
            return 'This vehicule is allowed <br><br>';
        }
        
    }


}