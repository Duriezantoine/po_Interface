<?php

require_once 'vehicle.php';

abstract class HighWay
{  
    protected array $currentVehicles;

    protected int $nbLane;

    protected int $maxSpeed;

    public function __construct()
    {
        $this->setCurrentVehicles(array());
    }

    //methode add vehicle abstraite 
    abstract public function addVehicle(Vehicle $vehicle);


    public function getCurrentVehicles(): array
    {
        return $this->currentVehicles;
    }

    public function setCurrentVehicles(array $currentVehicles): void
    {
        $this->currentVehicles = $currentVehicles;
    }

    public function getNbLane(): int
    {
        return $this->nbLane;
    }

    public function setNbLane(int $nbLane): void
    {
        $this->nbLane = $nbLane;
    }

    public function getMaxSpeed(): int
    {
        return $this->maxSpeed;
    }

    public function setMaxSpeed(int $maxSpeed): void
    {
        $this->maxSpeed = $maxSpeed;
    }
}