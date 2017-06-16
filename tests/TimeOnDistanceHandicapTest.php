<?php 

use PHPUnit\Framework\TestCase;
use App\TimeOnDistanceHandicap as TOD;
use App\Boat;
use App\Race;

class TimeOnDistanceHandicapTest extends TestCase
{
    public function setUp()
    {
        $this->boat = new Boat('Tinkerbell', 100);
        $this->race = new Race;
    }
    /** @test */
    public function a_tod_handicap_corrects_a_boats_finish_time()
    {        
        $this->race->setDistance(10);
        $this->race->setStart(0);

        $tod = new TOD($this->boat, $this->race);
        $corrected_time = $tod->corrected_time($finish_time=3600);

        $this->assertEquals(2600, $corrected_time);
    }
    /** 
        @test
        @expectedException Exception
     */
    public function a_tod_handicap_has_race_with_valid_start_time() 
    {
        $this->race->setDistance(10);

        $tod = new TOD($this->boat, $this->race);
    }
    /** 
        @test
        @expectedException Exception
     */
    public function a_tod_handicap_has_race_with_valid_distance() 
    {
        $this->race->setStart(1000);

        $tod = new TOD($this->boat, $this->race);
    }

}