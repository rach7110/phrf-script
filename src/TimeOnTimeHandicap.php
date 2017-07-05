<?php

namespace App;

use Exception;
use App\Boat;
use App\Race;
use App\PhrfHandicap;

class TimeOnTimeHandicap implements PhrfHandicap
{
    protected $boat;
    protected $race;
    public $a_factor;
    public $b_factor;

    public function __construct(Boat $boat, Race $race, $a_factor, $b_factor) 
    {
        $this->boat = $boat;
        $this->race = $race;
        $this->a_factor = $a_factor;
        $this->b_factor = $b_factor;

        $this->validate();
    }

    public function validate()
    {
        if(is_null($this->race->start()))
        {
            throw new Exception('A race start time must be saved before using time on time handicap.');
        }

        if(is_null($this->a_factor))
        {
            throw new Exception('A-factor must be saved before using time on time handicap.');
        }

        if(is_null($this->b_factor))
        {
            throw new Exception('B-factor must be saved before using time on time handicap.');
        }

    }

    public function correctedTime($finish_time)
    {
        $boat = $this->boat;
        $race = $this->race;
        $a_factor = $this->a_factor;
        $b_factor = $this->b_factor;

        $elapsed_time = $finish_time - $race->start();
        $tcf = $a_factor / ($b_factor + $boat->phrfRating());
        $corrected_time = $elapsed_time * $tcf;

        return round($corrected_time, 4);
    }

  
}