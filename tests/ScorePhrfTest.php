<?php

use PHPUnit\Framework\TestCase;
use App\Race;
use App\Boat;
use App\ScorePhrf;
use App\TimeOnDistanceHandicap as TOD;
use App\TimeOnTimeHandicap as TOT;

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
        $phrf_score = new ScorePhrf($tod);
        $handicap_type = $phrf_score->phrf_handicap;

        $this->assertInstanceOf(TOD::class, $handicap_type);
    }

    /** @test */
    public function a_score_works_with_time_on_time() 
    {
        $tot = new TOT($this->boat, $this->race, 650, 550);
        $phrf_score = new ScorePhrf($tot);
        $handicap_type = $phrf_score->phrf_handicap;

        $this->assertInstanceOf(TOT::class, $handicap_type);
    }
}
