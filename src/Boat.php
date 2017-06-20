<?php

namespace App;

class Boat 
{
    protected $name;
    protected $phrf_rating;

    public function __construct($name, $phrf_rating)
    {
        $this->name = $name;
        $this->phrf_rating = $phrf_rating;
    }

    public function name() 
    {
        return $this->name;
    }
    
    public function setName($name) 
    {
        $this->name = $name;
    }

    public function phrfRating()
    {
        return $this->phrf_rating;
    }

    public function setPhrfRating($phrf_rating) 
    {
        $this->phrf_rating = $phrf_rating;
    }

}