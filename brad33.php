<?php
class Bike {
    private $speed = 0;
    function upSpeed(){
        $this->speed =
            ($this->speed<1)?1:$this->speed*1.2;
    }
    function downSpeed(){
        $this->speed =
            ($this->speed<1)?0:$this->speed*0.7;
    }
    function getSpeed(){
        return $this->speed;
    }
}

$myBike = new Bike;
$urBike = new Bike;

$myBike->upSpeed();$myBike->upSpeed();$myBike->upSpeed();
$myBike->downSpeed();

$urBike->upSpeed();$urBike->upSpeed();$urBike->upSpeed();
$urBike->upSpeed();

echo "My Bike = {$myBike->getSpeed()}<br>";
echo "Ur Bike = {$urBike->getSpeed()}";


