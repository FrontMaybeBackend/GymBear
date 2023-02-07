<?php

namespace classes;
class Calculator
{

    public $weight;

    public $reps;

    public int $score;

    public function __construct($weight, $reps)
    {
        $this->weight = $weight;
        $this->reps = $reps;

    }

    public function OneRepMax()
    {

       $this->score = $this->weight * $this->reps * 0.0333 + $this->weight;
        return $this->score;
    }


}