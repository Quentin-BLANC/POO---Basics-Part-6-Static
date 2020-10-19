<?php

require_once 'Vehicle.php';

class Truck extends Vehicle
{
    private $storageCapacity;

    private $loading = 0;

    public function __construct(int $storageCapacity, string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->energy = ($energy);
        $this->storageCapacity = ($storageCapacity);
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): void
    {
        $this->energy = $energy;
    }

    public function getStorageCapacity(): int
    {
        return $this->storageCapacity;
    }

    public function setStorageCapacity(int $storageCapacity): void
    {
        $this->storageCapacity = $storageCapacity;
    }

    public function getLoading(): int
    {
        return $this->loading;
    }

    public function setLoading(int $loading): void
    {   
        if (($this->loading + $loading) <= $this->storageCapacity) {
            $this->loading += $loading;
        }
    }

    public function fullOrNot()
    {
        if ($this->loading >= $this->storageCapacity) {
            return "full";
        } else {
            return "in filling";
        }
    }
}