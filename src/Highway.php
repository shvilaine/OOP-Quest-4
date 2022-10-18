<?php

abstract class Highway 
{
    protected array $currentVehicles;
    protected int $nbLane;
    protected int $maxSpeed;
    
    abstract public function addVehicle(Vehicle $vehicle); 

    public function getCurrentVehicles(): array
    {
        return $this->currentVehicles;
    }

    public function setCurrentVehicles($currentVehicles): void
    {
        $this->currentVehicles = $currentVehicles;
    }

    public function getNbLane(): int
    {
        return $this->nbLane;
    }

    public function setNbLane($nbLane): void
    {
        $this->nbLane = $nbLane;
    }

    public function getmaxSpeed(): int
    {
        return $this->maxSpeed;
    }

    public function setmaxSpeed($maxSpeed): void
    {
        $this->maxSpeed = $maxSpeed;
    }
}