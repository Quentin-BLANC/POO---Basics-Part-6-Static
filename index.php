<?php

require_once 'Bicycle.php';
require_once 'Skateboard.php';
require_once 'Car.php';
require_once 'Truck.php';
require_once 'PedestrianWay.php';
require_once 'ResidentialWay.php';
require_once 'MotorWay.php';

$bicycle = new Bicycle('blue', 1);
echo $bicycle->forward();
var_dump($bicycle);

$car = new Car('green', 4, 'electric');
echo $car->forward();
var_dump($car);

$truck = new Truck(100, 'red', 3, 'electric');
var_dump($truck);
echo $truck->forward();
echo $truck->brake();
echo $truck->fullOrNot();
echo $truck->setLoading(50);
echo $truck->getLoading();
echo $truck->setLoading(60);
echo $truck->setLoading(30);
echo $truck->fullOrNot();
var_dump($truck);

