<?php 

namespace App;

use Exception;
use App\Race;

class ScorePhrf
{
    public $phrf_handicap;

    public function __construct(PhrfHandicap $phrf_handicap)
    {
        $this->phrf_handicap = $phrf_handicap;
    }

}