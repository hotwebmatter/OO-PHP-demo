<?php

namespace Vehicles;

interface VehicleInterface {
    
    public function getPrice();
    public function setPrice();
    
    public function getMake();
    public function setMake();
    
    public function getModel();
    public function setModel();
    
}