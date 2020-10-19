<?php

class Car
{
    private $nbWheels = 4;
    private $currentSpeed;
    private $color;
    private $nbSeats;
    private $energy;
    private $energyLevel;

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->energy = $energy;
    }

    public function start()
    {
        return "Vroum !";
    }

    public function forward()
    {
        $this->currentSpeed = 30;
    }

    public function brake()
    {
        while($this->currentSpeed > 0)
        {
            $this->currentSpeed--;
        }
    }

    public function getNbWheels() : int
    {
        return $this->nbWheels;
    }

    public function getCurrentSpeed() : int
    {
        return $this->currentSpeed;
    }

    public function getColor() : int
    {
        return $this->color;
    }

    public function getNbSeats() : int
    {
        return $this->nbSeats;
    }

    public function getEnergy() : int
    {
        return $this->energy;
    }

    public function getEnergyLevel() : int
    {
        return $this->energyLevel;
    }
}