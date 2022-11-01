<?php

require_once 'Vehicle.php';

class Cars extends Vehicle
 {
    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric',];

    private string $energy;

    private int $energyLevel;

    private bool $hasParkBrake;

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): Cars
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }


    /**
     * Get the value of hasParkBrake
     */ 
    public function getHasParkBrake()
    {
        return $this->hasParkBrake;
    }

    /**
     * Set the value of hasParkBrake
     *
     * @return  self
     */ 
    public function setHasParkBrake(bool $hasParkBrake): void
    {
        $this->hasParkBrake = $hasParkBrake;
    }

    public function start(): string
    {   
        $startSentence = "";
        $this->hasParkBrake = $this->getHasParkBrake();
        $this->currentSpeed = $this->getCurrentSpeed();
        $this->energyLevel = $this->getEnergyLevel();
        if ($this->hasParkBrake == true)
        {
            throw new Exception('Le frein à main est enclenché ! Je le retire !');
        } else {
            while($this->currentSpeed < $this->getEnergyLevel()) {
                $this->currentSpeed ++;
                $startSentence .= "J'accelère !";
            }
        }

        return $startSentence;
    }

}