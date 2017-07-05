<?php 

use PHPUnit\Framework\TestCase;
use App\TimeOnTimeHandicap as TOT;
use App\PhrfHandicap;
use App\Boat;
use App\Race;


class TimeOnTimeHandicapTest extends TestCase
{
    public function setUp()
    {
        $this->boat = new Boat('Tinkerbell', 100);
        $this->race = new Race;
        $this->race->setStart(0);

        $this->tot = new TOT($this->boat, $this->race, 650, 600);
    }
    /** @test */
    public function a_tot_handicap_corrects_a_boats_finish_time()
    {
        $finish_time = 3600;
        $corrected_time = $this->tot->correctedTime($finish_time);

        $this->assertEquals(3342.8571, $corrected_time);
    }
    /** 
        @test
        @expectedException Exception
     */
    public function a_tot_handicap_has_race_with_valid_start_time() 
    {
        $this->race->setStart(null);

        $tot = new TOT($this->boat, $this->race, 650, 600);
    }
    /** 
        @test
        @expectedException Exception
     */
    public function a_tot_handicap_has_a_factor_that_is_not_null() 
    {
        $this->tot = new TOT($this->boat, $this->race, null, 600);
    }
    /** 
        @test
        @expectedException Exception
     */
    public function a_tot_handicap_has_b_factor_that_is_not_null() 
    {
        $this->tot = new TOT($this->boat, $this->race, 550, null);
    }
}