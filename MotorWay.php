<?php

require_once 'HighWay.php';

final class MotorWay extends HighWay
{
    public $nbLane = 4;
    public $maxSpeed = 130;

    public function addVehicule(Vehicle $vehicle): void
    {
        if ($vehicle instanceof Car) {
            $currentVehicles[] = $vehicle;
        }
    }
}