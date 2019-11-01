<?php
require 'Vehicle.php';
require 'Truck.php';
require 'Car.php';
require 'HighWay.php';
require 'MotorWay.php';
require 'PedestrianWay.php';
require 'ResidentialWay.php';
require 'Bicycle.php';
require 'Skateboard.php';

$foodTruck = new Truck('blanc', 2, 'essence', 25);
$berline = new Car('grise', 4,'electric');
$bmx = new Bicycle ('bleu', 1);
$skate = new Skateboard('marron',0);

$autoroute = new MotorWay();
$rue= new PedestrianWay();
$nationale = new ResidentialWay();

echo'Berline <br/>';
echo $autoroute->addVehicle($berline) .$autoroute->getMaxSpeed() .$autoroute->getNbLane();
echo '<br/>';
echo $berline->switchoff();

echo'Bmx <br/>';
echo $rue->addVehicle($bmx) .$rue->getMaxSpeed() .$rue->getNbLane();
echo '<br/>';
echo $bmx->setCurrentSpeed(15);
echo $bmx-> switchOff();

echo'Transporteur <br/>';
echo $nationale->addVehicle($foodTruck) .$nationale->getMaxSpeed() .$nationale->getNbLane();
echo '<br/>';
echo $foodTruck->switchOn();
echo "<br>";

echo'Skate <br/>';
echo $autoroute->addVehicle($bmx) .$autoroute->getMaxSpeed() .$autoroute->getNbLane();
echo '<br/>';
echo 'Si tu veux mourrir vazy!';
echo '<br/>';
$bmx->setCurrentSpeed(5);
echo 'la vitesse est de '.$bmx->getCurrentSpeed().'KM/heure ';
echo $bmx-> switchOff();





