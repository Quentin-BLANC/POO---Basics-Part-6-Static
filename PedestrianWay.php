<?php

require_once 'HighWay.php';

final class PedestrianWay extends HighWay
{
    public $nbLane = 1;
    public $maxSpeed = 10;

    public function addVehicule(Vehicle $vehicle): void
    {
        if (($vehicle instanceof Bicycle) || ($vehicle instanceof Skateboard)) {
            $currentVehicles[] = $vehicle;
        }
    }
}