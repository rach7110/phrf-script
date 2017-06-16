<?php 

use PHPUnit\Framework\TestCase;
use App\TimeOnDistanceHandicap as TOD;
use App\Boat;
use App\Race;

class TimeOnDistanceHandicapTest extends TestCase
{
    /** @test */
    public function a_tod_handicap_corrects_a_boats_finish_time()
    {
        $boat = new Boat('Tinkerbell', 100);
        
        $race = new Race;
        $race->setDistance(10);
        $race->setStart(0);

        $tod = new TOD($boat, $race);
        $corrected_time = $tod->corrected_time($finish_time=3600);

        $this->assertEquals(2600, $corrected_time);
    }

    // TODO: TEST THAT DISTANCE AND START TIME ARE NOT NULL WHEN CALCULATING CORRECTED TIME.
}