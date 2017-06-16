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

    public function name() 
    {
        return $this->name;
    }
    
    public function setName($name) 
    {
        $this->name = $name;
    }

    public function rating()
    {
        return $this->rating;
    }

    public function setRating($rating) 
    {
        $this->rating = $rating;
    }

}