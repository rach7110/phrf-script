<?php 

namespace App;

class Race 
{
 protected $distance=0;
 protected $start=0;
 
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

}