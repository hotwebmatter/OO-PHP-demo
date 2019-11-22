<?php

namespace Vehicles;

interface VehicleInterface {
    
    public function getMake();
    public function getModel();
    public function getPrice();

    public function setMake(String $n);
    public function setModel(String $n);
    public function setPrice(Float $n);
    
}