<?php 

use PHPUnit\Framework\TestCase;
use App\TimeOnDistanceHandicap as TOD;
use App\Boat;

class TimeOnDistanceHandicapTest extends TestCase
{
    /** @test */
    public function a_tod_handicap_corrects_a_boats_elapsed_time()
    {
        $boat = new Boat('Tinkerbell', 100);
        $tod = new TOD($boat);
        $corrected_time = $tod->corrected_time(3600,10);

        $this->assertEquals($corrected_time, 2600);

    }
}