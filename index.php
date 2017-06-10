<?php

require 'vendor/autoload.php';

use App\Boat;
use App\TimeOnDistanceHandicap as TOD;
use App\TimeOnTimeHandicap as TOT;

$boat = new Boat;
$tot = new TOT;
$tod = new TOD;