<?php


namespace classes;

class ProgrammsControl
{

    public $recommended;

    public $diets;

    public $supplements;


    public function __construct($recommended, $diets, $supplements)
    {
        $this->recommended = $recommended;
        $this->diets = $diets;
        $this->supplements = $supplements;
    }


}