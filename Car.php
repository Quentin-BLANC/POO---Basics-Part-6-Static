<?php

require_once 'Vehicle.php';

class Car extends Vehicle
{
    const ALLOWED_ENERGIES = [
        'fuel',
        'electric'
    ];
    /**
     * @var string
     */
    private $energy;

    /**
     * @var int
     */
    private $energyLevel;

    private $hasParkBrake = true;

    public function setParkBrake(): void
    {
        if ($this->hasParkBrake === false) {
            $this->hasParkBrake = true;
        }
        else {
            $this->hasParkBrake = false;
        }
    }

    public function start()
    {
        
        if ($this->hasParkBrake === true) {
            throw new Exception('Warning, parkbrake on !');
        }
        parent::start();
    }

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): Car
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
}