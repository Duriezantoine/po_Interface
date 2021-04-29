<?php

require_once 'HighWay.php';

// ResidentialWay.php

final class ResidentialWay extends HighWay
{
    public function __construct()
    {
        parent::__construct();
        $this->setNbLane(2);
        $this->setMaxSpeed(50);
    }

    final public function addVehicle(Vehicle $vehicle): void
    {

        $currentVehicle = $this->getCurrentVehicles();
        array_push($currentVehicle, $vehicle);
        $this->setCurrentVehicles($currentVehicle);
    }
}