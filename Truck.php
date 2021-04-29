
<?php

require_once 'vehicle.php';
require_once 'LightableInterface.php';
// truck.php

class Truck extends Vehicle implements LightableInterface
{
    public const CAPACITY_MAX = 100;

    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];


    private int $capacity;

    private int $charge = 0;

    private string $energy;

    private int $energyLevel;


    public function __construct(string $color, int $nbSeats, string $energy, int $capacity)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
        $this->setCapacity($capacity);
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): Truck
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

    public function getCapacity(): int
    {
        return $this->capacity;
    }

    public function setCapacity(int $capacity): Truck
    {
        if ($capacity > self::CAPACITY_MAX) {
            $this->capacity = self::CAPACITY_MAX;
        } else {
            $this->capacity = $capacity;
        }
        return $this;
    }

    public function getCharge(): int
    {
        return $this->charge;
    }

    public function setCharge(int $charge): Truck
    {
        if ($charge > $this->capacity) {
            $this->charge = $this->capacity;
        } else {
            $this->charge = $charge;
        }
        return $this;
    }

    public function isFull(): string
    {
        if ($this->getCharge() < $this->getCapacity()) {
            return " in filling ! <br>";
        } else {
            return "full ! <br>";
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