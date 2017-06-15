<?php

use PHPUnit\Framework\TestCase;
use App\Boat;

class BoatTest extends TestCase
{
    protected $boat;

    public function setUp() 
    {
        $this->boat = new Boat("Jade", 98);
    }

    /** @test */
    public function a_boat_has_a_name() 
    {
        $this->assertEquals('Jade', $this->boat->boatname());
    }

    /** @test */
    public function a_boat_has_a_rating() 
    {
        $this->assertEquals(98, $this->boat->rating());
    }


}