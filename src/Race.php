<?php 

namespace App;

class Race 
{
    protected $distance;
    protected $start;
    protected $fleet;

    public function distance()
    {
        return $this->distance;
    }

    public function setDistance($distance)
    {
        $this->distance = $distance;
    }

    public function start()
    {
        return $this->start;
    }

    public function setStart($start)
    {
        $this->start = $start;
    }

    public function fleet()
    {
        return $this->fleet;
    }

    public function setFleet($fleet)
    {
        $this->fleet = $fleet;
    }

}