<?php

use PHPUnit\Framework\TestCase;

// Bring in our Car class.
use Vehicles\Tractor;

final class TractorTest extends TestCase {
    
    public function testTractorCanBeBuilt() {
        // Instantiate a new tractor.
        $c = new Tractor();
        
        // Assert that the newly built tractor is in fact a Tractor.
        $this->assertInstanceOf(Tractor::class, $c);
        
        $c->setMake("John Deere");
        // Assert that the make of Tractor can be set.
        $this->assertEquals($c->getMake(), "John Deere");
        
        $c->setModel("Gator");
        // Assert that the model of Tractor can be set.
        $this->assertEquals($c->getModel(), "Gator");
        
        $c->setPrice(249.95);
        // Assert that the price of Tractor can be set.
        $this->assertEquals($c->getPrice(), 249.95);
        
    }
}