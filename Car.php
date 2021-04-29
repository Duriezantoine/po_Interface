<?php

require_once 'vehicle.php';
require_once 'LightableInterface.php';

// car.php

class Car extends Vehicle implements LightableInterface
{

    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];

    private string $energy;

    private int $energyLevel;

    private bool $hasParkBrake = true;

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
    }

    public function start()
    {
       
        if ($this->hasParkBrake === true) {
            throw new Exception("le frein a main est lever !");
        }

    }

    //get/set function
    

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): car
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

    public function setHasParkBrake(): void
    {
        if($this->hasParkBrake === true){
	        $this->hasParkBrake = false;
        } else {
	        $this->hasParkBrake =true;
        }
    }
    public function switchOn(): bool

    {

       return true;
    }


    public function switchOff(): bool

    {

        return false ;

    }
}