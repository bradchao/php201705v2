<?php
include "bradapi.php";

$myBike = new Bike;
$urBike = new Bike;

$myBike->upSpeed();$myBike->upSpeed();$myBike->upSpeed();
$myBike->downSpeed();

$urBike->upSpeed();$urBike->upSpeed();$urBike->upSpeed();
$urBike->upSpeed();

echo "My Bike = {$myBike->getSpeed()}<br>";
echo "Ur Bike = {$urBike->getSpeed()}";
echo '<hr>';

$myScooter = new Scooter();
$myScooter->upSpeed();
echo "My Scooter = {$myScooter->getSpeed()}";


