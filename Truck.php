<?php

require_once 'Vehicle.php';
class Truck extends Vehicle
 {

    public const ALLOWED_ENERGIES = [
        'fuel',];

    private int $energyLevel;

    private int $loadCapacity;

    private int $currentLoad = 0;

    public function __construct(string $color, int $nbSeats, string $energy, int $loadCapacity)
    {
        parent::__construct($color, $nbSeats);
        $this->energy = $energy;
        $this->loadCapacity = $loadCapacity;
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }


    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergy(string $energy): Truck
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }



    public function getLoadCapacity()
    {
        return $this->loadCapacity;
    }

    public function getCurrentLoad()
    {
        return $this->currentLoad;
    }
 
    public function setCurrentLoad(int $currentLoad)
    {
        if($currentLoad >= 0){
            $this->currentLoad = $currentLoad;
        } else {
            $currentLoad = 0;
        }
    }

    public function isFull (): string
    {
        if($this->getCurrentLoad() === $this->getLoadCapacity()){
            $this->currentSpeed = $this->currentSpeed - 20;
            return 'full';
        }elseif ($this->getCurrentLoad() > $this->getLoadCapacity()){
            $this->currentSpeed = 0;
            return 'Overloaded !!';
        }elseif($this->getCurrentLoad() === 0){
            return 'Empty ! Going full speed';
        }
        else{
            $this->currentSpeed = $this->currentSpeed - 10;
            return 'in filling';
        }
        
    }
}