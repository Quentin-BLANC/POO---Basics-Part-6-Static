<?php

abstract class HighWay
{
    private $currentVehicles = [];
    private $nbLane;
    private $maxSpeed;

    public function getCurrentVehicle(): array
    {
        return $this->currentVehicles;
    }

    public function setCurrentVehicule(string $currentVehicles): void
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

    public function setMaxSpeed(int $maxSpeed)
    {
        $this->maxSpeed = $maxSpeed;
    }

    abstract public function addVehicule(Vehicle $vehicle): void;

}