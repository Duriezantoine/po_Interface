<?php

require_once 'HighWay.php';

// PedestrianWay.php

final class PedestrianWay extends HighWay
{
    public function __construct()
    {
        parent::__construct();
        $this->setNbLane(1);
        $this->setMaxSpeed(10);
    }
    final public function addVehicle(Vehicle $vehicle): void
    {
        if ($vehicle instanceof Bicycle) {
            $currentVehicle = $this->getCurrentVehicles();
            array_push($currentVehicle, $vehicle);
            $this->setCurrentVehicles($currentVehicle);
        }
    }
}