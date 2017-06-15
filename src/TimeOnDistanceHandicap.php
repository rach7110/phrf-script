<?php

namespace App;

use App\Boat;

class TimeOnDistanceHandicap extends Boat
{
    protected $boat;

    public function __construct($boat) 
    {
        $this->boat = $boat;
    }

    public function corrected_time($elapsed_time, $distance)
    {
        $rating = $this->boat->rating;
        $corrected_time = $elapsed_time - ($rating * $distance);

        return $corrected_time;
    }


}