<?php

require_once(__DIR__ . "/vendor/autoload.php");

use \Vehicles\ExoticCar;

 // let's build a car
 $myCar = new ExoticCar();
 
 $myCar->setMake("Porsche");
 $myCar->setModel("Dutch Police Car");
 $myCar->setYear(1968);
 $myCar->setPrice(2500.37);
 $myCar->setUsed(true);
 $myCar->setMileage(500000);
 $myCar->setColor("Green");
 $myCar->setNumberProduced(150);
 $myCar->setWeight(2);
 $myCar->setHorsepower(5);
 echo("Make: ");
 echo($myCar->getMake());
 echo("<br />Model: " . $myCar->getModel());
 echo("<br />Year: " . $myCar->getYear());
 echo("<br />Price: $" . $myCar->getPrice());
 echo("<br />Used: " . $myCar->getUsed());
 echo("<br />Mileage: " . $myCar->getMileage());
 echo("<br />Number Produced: " . $myCar->getNumberProduced());
 echo("<br />Weight: " . $myCar->getWeight());
 echo("<br />Horsepower: " . $myCar->getHorsepower());
 echo("<br />Horsepower to Weight Ratio: " . $myCar->calculatePowerToWeightRatio());
 echo("<br />");
 var_dump($myCar);