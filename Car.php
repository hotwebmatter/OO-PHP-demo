<?php 

/**
 * Our Car class definition
 */
 class Car {
 	private $make;
 	private $model;
 	private $year;
 	private $price;
 	private $used;
 	private $mileage;
 	private $color;
 	
 	public function __construct() {
 		echo("Constructor called<br />");
 	}
 	
 	public function setMake(String $n) {
 		$this->make = $n;
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

 	public function setYear(Int $n) {
 		$this->year = $n;
 	}
 
 	public function getYear() {
 		return $this->year;
 	}

 	public function setPrice(Float $n) {
 		$this->price = $n;
 	}
 
 	public function getPrice() {
 		return $this->price;
 	}

 	public function setUsed(Bool $n) {
 		$this->used = $n;
 	}
 
 	public function getUsed() {
 		if ($this->used) {
 			return "TRUE!";
 		}
 		return "FALSE!";
 	}

 	public function setMileage(Float $n) {
 		$this->mileage = $n;
 	}
 
 	public function getMileage() {
 		return $this->mileage;
 	}

 	public function setColor(String $n) {
 		$this->color = $n;
 	}
 
 	public function getColor() {
 		return $this->color;
 	}
 	
 }