<?php

require_once 'Bicycle.php';
require_once 'Car.php';

$bike = new Bicycle("white");

/*var_dump($bike);

$bike->color = "blue";
$bike->currentSpeed = 0;
var_dump($bike);

// Moving bike
echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->currentSpeed . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->currentSpeed . ' km/h' . '<br>';
echo $bike->brake();*/

var_dump($bike);

$homerCar = new Car ("pink", 5, "D'oh!");
$homerCar->start();
$homerCar->forward();
$homerCar->brake();

var_dump($homerCar);
