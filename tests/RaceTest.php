<?php 

use PHPUnit\Framework\TestCase;
use App\Race;

class RaceTest extends TestCase
{
    /** @test */
    public function a_race_has_a_distance()
    {
        $race = new Race;

        $this->assertEquals(0, $race->distance());
    }

    /** @test */
    public function a_user_can_set_the_race_distance()
    {
        $race = new Race;
        $race->setDistance(10);

        $this->assertEquals(10, $race->distance());
    }

    /** @test */
    public function a_race_has_a_start_time()
    {
        $race = new Race;

        $this->assertEquals(0, $race->start());
    }

    /** @test */
    public function a_user_can_set_the_race_start_time()
    {
        $race = new Race;
        $race->setStart(1200);

        $this->assertEquals(1200, $race->start());
    }

}