<?php

namespace classes;
include("database/UserProgramConfig.php");

class UserProgramControl extends \UserProgramConfig
{

    public $name;

    public $radioInput;

    public $exercises = [];

    public $repUser;

    public $dayTrain;

    public function __construct($name, $exercises, $repUser, $nameExc, $dayTrain)
    {
        $this->name = $name;
        $this->exercises = $exercises;
        $this->repUser = $repUser;
        $this->nameExc = $nameExc;
        $this->dayTrain = $dayTrain;
    }

    private $errorMessages = array(
        "name" => "name is required",
        "radio" => "at least one exercise",
        "session" => "to add exercises you must have account.",


    );

    public function validationTraining()
    {
        $result = true;
        if ($this->nameValidation() == false) {
            return $this->errorMessages['name'];
            $result = false;
            /*if($this->radioInputValidation() == false){
                return $this->errorMessages['radio'];
                $result = false;
        */
        }
        if ($this->userValidaiton() == false) {
            return $this->errorMessages['session'];
            $result = false;
        }
        if ($result == true) {
            $this->addUserPrograms($this->name, $this->exercises, $this->repUser, $this->nameExc, $this->dayTrain);

        }
    }

    public function nameValidation()
    {
        $result = true;
        if (empty($this->name)) {
            $result = false;
        }
        return $result;
    }

    public function userValidaiton()
    {
        $result = true;
        if (!isset($_SESSION['username'])) {
            $result = false;
        }
        return $result;
    }


}