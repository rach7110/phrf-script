<?php

namespace App;

class TimeOnDistanceHandicap 
{
    protected $boat;
    protected $race;

    public function __construct($boat, $race) 
    {
        $this->boat = $boat;
        $this->race = $race;
    }

    public function corrected_time($elapsed_time)
    {
        $rating = $this->boat->rating();
        $distance = $this->race->distance();

        $corrected_time = $elapsed_time - ($rating * $distance);

        return $corrected_time;
    }


}