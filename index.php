<?php

require_once(__DIR__ . "/vendor/autoload.php");

use \Vehicles\Car;
echo("foo");
 // let's build a car
 $myCar = new Car();
 
 $myCar->setMake("Dodge");
 $myCar->setModel("Dart");
 $myCar->setYear(1968);
 $myCar->setPrice(2500.37);
 $myCar->setUsed(true);
 $myCar->setMileage(500000);
 $myCar->setColor("Green");
 echo("Make: ");
 echo($myCar->getMake());
 echo("<br />Model: " . $myCar->getModel());
 echo("<br />Year: " . $myCar->getYear());
 echo("<br />Price: $" . $myCar->getPrice());
 echo("<br />Used: " . $myCar->getUsed());
 echo("<br />Mileage: " . $myCar->getMileage());
 echo("<br />Color: " . $myCar->getColor());

 var_dump($myCar);