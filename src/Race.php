<?php 

namespace App;

class Race 
{
 
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