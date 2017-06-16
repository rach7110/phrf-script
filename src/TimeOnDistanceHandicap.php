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

    public function corrected_time($finish_time)
    {
        $start_time = $this->race->start();
        $elapsed_time = $finish_time - $start_time;

        $corrected_time = $elapsed_time - ($this->boat->rating() * $this->race->distance());

        return $corrected_time;
    }


}