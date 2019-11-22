<?php 

/**
 * Our ExoticCar class definition
 */
 
namespace Vehicles;

class ExoticCar extends Car {
    
 	private $numberProduced;
 	private $weight;
 	private $horsepower;
 	
 	public function __construct() {
 		echo("ExoticCar constructor called<br />");
 	}
 	
 	public function setNumberProduced(Int $n) {
 		$this->numberProduced = $n;
 	}
 
 	public function getNumberProduced() {
 		return $this->numberProduced;
 	}

 	public function setWeight(Float $n) {
 		$this->weight = $n;
 	}
 
 	public function getWeight() {
 		return $this->weight;
 	}

 	public function setHorsepower(Float $n) {
 		$this->horsepower = $n;
 	}
 
 	public function getHorsepower() {
 		return $this->horsepower;
 	}

}