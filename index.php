<?php

require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'truck.php';
require_once 'MotorWay.php';
require_once 'PedestrianWay.php';
require_once 'ResidentialWay.php';

//BICYCLE
$bicycle = new Bicycle('blue', 1);
echo $bicycle->forward();
$bicycle->setCurrentSpeed(15);


echo $bicycle->forward();
echo '<br> Vitesse du vélo : ' . $bicycle->getCurrentSpeed()  . ' km/h' . '<br>';
echo $bicycle->brake();
echo '<br> Vitesse du vélo : ' . $bicycle->getCurrentSpeed() . ' km/h' . '<br>';
echo $bicycle->brake() . "<br><br>";

//TRUCK
$truck = new Truck('blue', 3, 'fuel', 100);
$truck->setCharge(50);
echo $truck->isFull();


//ABSTRACT
$a = new MotorWay();
$a->addVehicle(new Car('red', 5, 'fuel'));

$b = new PedestrianWay();
$b->addVehicle(new Bicycle('red', 5));



//Exceptions
$c = new Car('red', 5, 'electric');
try {
    $c->start();
} catch (Exception $exception) {
    echo "Exception received  : ". $exception->getMessage() . "\n";
    $c->setHasParkBrake();
} finally {
    echo "Ma voiture roule comme un donut";
}