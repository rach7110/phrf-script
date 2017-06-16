<?php 

namespace App;

class Race 
{
 protected $distance=0;
 
 public function __construct()
 {
    $this->distance = $distance;
 }   

 public function distance()
 {
    return $this->distance;
 }

 public function setDistance($distance)
 {
    $this->distance = $distance;
 }
}