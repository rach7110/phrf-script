<?php

namespace App;

use Exception;
use App\Boat;
use App\Race;
use App\PhrfHandicap;

class TimeOnDistanceHandicap implements PhrfHandicap
{
    protected $boat;
    protected $race;
    const id = 1;
    const description = "placeholder 1";

    public function __construct(Boat $boat, Race $race) 
    {
        $this->boat = $boat;
        $this->race = $race;

        $this->validate();
    }

    public function validate()
    {
        if(is_null($this->race->start()))
        {
            throw new Exception('A race start time must be saved before using time on distance handicap.');
        }

        if(is_null($this->race->distance()))
        {
            throw new Exception('A race distance must be saved before using time on distance handicap.');

        }
    }

    public function correctedTime($finish_time)
    {   
        $boat = $this->boat;
        $race = $this->race;

        $start_time = $race->start();
        $elapsed_time = $finish_time - $start_time;

        $corrected_time = $elapsed_time - ($boat->phrfRating() * $race->distance());

        return $corrected_time;
    }

}