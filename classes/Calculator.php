<?php

namespace classes;
class Calculator
{

    public $weight;

    public $reps;

    public $height;
    public int $score;

    public function __construct($weight, $reps)
    {
        $this->weight = $weight;
        $this->reps = $reps;

    }

    private $errorCalc = array(
        "empty" => "Inputs can't be empty",
        "numeric" => "Inputs must be numeric"


    );

    public function oneRepMax()
    {
        $checkThis = true;
        if ($this->validationCalc() == false) {
            return $this->errorCalc["empty"];
            $checkThis = false;
        }
        if ($this->valIsNumeric() == false) {
            return $this->errorCalc['numeric'];
            $checkThis = false;
        }
        if ($checkThis = true) {
            $this->score = $this->weight * $this->reps * 0.0333 + $this->weight;
            return $this->score;
        }

    }

    public function calcBMI()
    {
        $checkThis = true;
        if ($this->validationCalc() == false) {
            return $this->errorCalc["empty"];
            $checkThis = false;
        }
        if ($this->valIsNumeric() == false) {
            return $this->errorCalc['numeric'];
            $checkThis = false;
        }
        if ($checkThis = true) {
            $this->height = $this->reps / 100;
            $this->score = $this->weight / pow($this->height, 2);
            return $this->score;
        }
    }


    public function validationCalc()
    {
        $calc = true;
        if (empty($this->weight) || empty($this->reps)) {
            $calc = false;
        } else {
            $calc = true;
        }
        return $calc;
    }

    public function valIsNumeric()
    {
        $calcNum = true;
        if (!is_numeric($this->weight) || !is_numeric($this->reps)) {
            $calcNum = false;
        } else {
            $calcNum = true;
        }
        return $calcNum;

    }

}