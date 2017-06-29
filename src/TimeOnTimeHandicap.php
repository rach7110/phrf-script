<?php

namespace App;

use Exception;
use App\Boat;
use App\Race;

class TimeOnTimeHandicap implements PhrfHandicap
{
    protected $boat;
    protected $race;

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
            throw new Exception('A race start time must be saved before using this handicap.');
        }
    }

    public function correctedTime($finish_time, $a_factor, $b_factor)
    {
        $boat = $this->boat;
        $race = $this->race;

        $elapsed_time = $finish_time - $race->start();
        $tcf = $a_factor / ($b_factor + $boat->phrfRating());
        $corrected_time = $elapsed_time * $tcf;

        return round($corrected_time, 4);
    }

  
}