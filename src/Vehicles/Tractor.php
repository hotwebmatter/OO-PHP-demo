<?php

namespace Vehicles;

class Tractor implements VehicleInterface {
    
 	private $make;
 	private $model;
 	private $price;

 	public function setMake(String $m) {
 		$this->make = $m;
 	}

 	public function getMake() {
 		return $this->make;
 	}

 	public function setModel(String $n) {
 		$this->model = $n;
 	}

 	public function getModel() {
 		return $this->model;
 	}

 	public function setPrice(Float $n) {
 		$this->price = $n;
 	}
 
 	public function getPrice() {
 		return $this->price;
 	}
}