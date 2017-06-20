<?php 

use PHPUnit\Framework\TestCase;
use App\TimeOnTimeHandicap as TOT;
use App\Boat;
use App\Race;

class TimeOnTimeHandicapTest extends TestCase
{
    public function setUp()
    {
        $this->boat = new Boat('Tinkerbell', 100);
        $this->race = new Race;
    }
    /** @test */
    public function a_tot_handicap_corrects_a_boats_finish_time()
    {        
        $this->race->setStart(0);
        $a_factor = 650;
        $b_factor = 600;
        $finish_time = 3600;

        $tot = new TOT($this->boat, $this->race);
        $corrected_time = $tot->correctedTime($finish_time, $a_factor, $b_factor);

        $this->assertEquals(3342.8571, $corrected_time);
    }
    /** 
        @test
        @expectedException Exception
     */
    public function a_tot_handicap_has_race_with_valid_start_time() 
    {
        $tot = new TOT($this->boat, $this->race);
    }

}