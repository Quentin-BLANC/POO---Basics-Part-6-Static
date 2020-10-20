<?php

require_once 'HighWay.php';

final class ResidentialWay extends HighWay
{
    public $nbLane = 2;
    public $maxSpeed = 50;

    public function addVehicule(Vehicle $vehicle): void
    {
        $currentVehicles[] = $vehicle;
    }
}