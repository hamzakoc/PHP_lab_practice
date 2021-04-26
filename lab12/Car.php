<?php


abstract class Car
{

    protected $tankVolume;

    public function setTankVolume($volume){
        $this->tankVolume = $volume;

    }

    abstract public function calcNumMilesOnFullThank();


}

class Honda extends Car{

    public function calcNumMilesOnFullThank()
    {
        // TODO: Implement calcNumMilesOnFullThank() method.

       $miles = $this->tankVolume*30;
       return $miles;

    }

    public function getColor(){
        return "beige";
    }


}

class Toyota extends Car{

    public function calcNumMilesOnFullThank()
    {
        // TODO: Implement calcNumMilesOnFullThank() method.

        $miles = $this->tankVolume*33;
        return $miles;

    }


}


$honda1 = new Honda();
$honda1->setTankVolume(10);
echo "The car can be driven ". $honda1->calcNumMilesOnFullThank(). " on full tank";
echo "<br>";
echo "the car color is ". $honda1->getColor();
echo "<br>";
echo "<br>";
$toyota1 = new Toyota();
$toyota1->setTankVolume(10);
echo "The car can be driven ". $toyota1->calcNumMilesOnFullThank(). " on full tank";
