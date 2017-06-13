<?php

namespace App;

class Boat 
{
    protected $name;
    protected $rating;

    public function __construct($name, $rating)
    {
        $this->name = $name;
        $this->rating = $rating;
    }

    public function boatname() 
    {
        return $this->name;
    }

    public function rating()
    {
        return $this->rating;
    }

}