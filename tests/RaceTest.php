<?php 

use PHPUnit\Framework\TestCase;
use App\Race;

class RaceTest extends TestCase
{
    protected $race;
    
    public function setUp() 
    {
        $this->race = new Race;
    }

    /** @test */
    public function a_user_can_set_the_race_distance()
    {
        $this->race->setDistance(10);

        $this->assertEquals(10, $this->race->distance());
    }

    /** @test */
    public function a_user_can_set_the_race_start_time()
    {
        $this->race->setStart(1200);

        $this->assertEquals(1200, $this->race->start());
    }

    /** @test */
    public function a_user_can_set_the_fleet()
    {
        $this->race->setFleet(1);

        $this->assertEquals(1, $this->race->fleet());
    }


}