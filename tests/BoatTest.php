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
        $this->assertEquals('Jade', $this->boat->name());
    }

    /** @test */
    public function a_boat_has_a_phrf_rating() 
    {
        $this->assertEquals(98, $this->boat->phrfRating());
    }

    /** @test */
    public function a_user_can_change_boat_name() 
    {
        $this->boat->setName('Sparkle');

        $this->assertEquals('Sparkle', $this->boat->name());
    }

    /** @test */
    public function a_user_can_change_boat_phrf_rating() 
    {
        $this->boat->setPhrfRating(105);

        $this->assertEquals(105, $this->boat->phrfRating());
    }
}