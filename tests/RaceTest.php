<?php 

use PHPUnit\Framework\TestCase;
use App\Race;

class RaceTest extends TestCase
{
    /** @test */
    public function a_race_has_a_distance()
    {
        $race = new Race;
        $race->setDistance(10);

        $this->assertEquals(10, $race->distance());

    }
}