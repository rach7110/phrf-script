<?php

use PHPUnit\Framework\TestCase;
use App\Race;
use App\Boat;
use App\ScorePhrf;
use App\TimeOnDistanceHandicap as TOD;

class ScorePhrfTest extends TestCase
{
    public function setUp()
    {
        $this->boat = new Boat('Blue Water', 112);
        $this->race = new Race;
        $this->race->setStart(0);
        $this->race->setDistance(12);
    }

    /** @test */
    public function a_score_works_with_time_on_distance() 
    {
        $tod = new TOD($this->boat, $this->race);
        $this->phrf_score = new ScorePhrf($tod);  
    }

    /** @test */
    public function a_score_works_with_time_on_time() 
    {
        $tod = new TOD($this->boat, $this->race);
        $this->phrf_score = new ScorePhrf($tod);
    }
}
