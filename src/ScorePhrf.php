<?php 

namespace App;

use Exception;
use App\Race;

class ScorePhrf
{
    public $race;
    public $boat;
    public $phrf_method;

    public function __construct(PhrfHandicap $phrf_method)
    {
        $this->phrf_method = $phrf_method;
    }

}