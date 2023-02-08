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

    private $errorCalc = array(
        "empty" => "Inputs can't be empty",
        "numeric" => "Inputs must be numeric"


    );
    public function OneRepMax()
    {
        $checkThis = true;
        if($this->ValidationCalc() == false){
            return  $this->errorCalc["empty"];
            $checkThis = false;
        }
        if($this->ValIsNumeric() == false){
            return $this->errorCalc['numeric'];
            $checkThis = false;
        }if($checkThis = true) {
            $this->score = $this->weight * $this->reps * 0.0333 + $this->weight;
            return $this->score;
        }

    }

    public function ValidationCalc(){
        $calc = true;
        if(empty($this->weight) || empty($this->reps)){
            $calc = false;
        }else{
            $calc  = true;
        }
        return $calc;
    }

    public function ValIsNumeric()
    {
         $calcNum = true;
        if (!is_numeric($this->weight) || !is_numeric($this->reps)) {
            $calcNum = false;
        }else{
            $calcNum = true;
        }
        return $calcNum;

    }

}