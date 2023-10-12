<?php

namespace classes;
include('database/SignupConfig.php');

class SignupControl extends SignupConfig
{
    private $username;

    private $email;
    private $password;

    private $repPassword;


    public function __construct($username, $email, $password, $repPassword)
    {
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
        $this->repPassword = $repPassword;
    }


    private $errorMessages = array(
        "username" => "Username must have 8 length",
        "password" => "Password must have 8 length",
        "rePassword" => "Password must be the same",
        "email" => "Email must be in good format",
        "empty" => "Inputs cant be empty",
        "check" => "username already taken"

    );


    public function Validation()
    {
        $checkThisSign = true;
        if ($this->checkInput() == false) {
            return $this->errorMessages["empty"];
            $checkThisSign = false;
        }
        if ($this->validationUser() == false) {
            return $this->errorMessages["username"];
            $checkThisSign = false;
        }
        if ($this->validationEmail() == false) {
            return $this->errorMessages["email"];
            $checkThisSign = false;
        }
        if ($this->validationPassword() == false) {
            return $this->errorMessages["rePassword"];
            $checkThisSign = false;
        }
        if ($this->check() == false) {
            return $this->errorMessages["check"];
            $checkThisSign = false;
        }
        if ($checkThisSign == true) {

            $this->setUser("$this->username", "$this->password", "$this->email");
        }
    }


    private function checkInput()
    {


        $result = true;
        if (empty($this->username) || empty($this->password) || empty($this->email) || empty($this->repPassword)) {
            $result = false;

        } else {
            $result = true;
        }
        return $result;
    }


    private
    function validationUser()
    {
        $result = true;
        if (strlen($this->username) < 8) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;

    }

    private
    function validationEmail()
    {
        $result = true;
        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }

    private
    function validationPassword()
    {
        $result = true;
        if ($this->password !== $this->repPassword) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }


    private
    function check()
    {
        $result = true;
        if ($this->checkUser("$this->username")) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }


}

?>