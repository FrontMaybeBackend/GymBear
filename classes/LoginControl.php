<?php

namespace classes;
require_once(__DIR__ . '/../config.php');
require_once(CLASS_PATH . 'LoginConfig.php');
class LoginControl extends \LoginConfig
{
    private $usernameLogin;
    private $userPassword;


    public function __construct($usernameLogin, $userPassword)
    {
        $this->usernameLogin = $usernameLogin;
        $this->userPassword = $userPassword;
    }


    private array $errorMessagesLogin = array(
        "empty" => "Inputs cant be empty",
        "check" => "Login and password don't match",
    );


    public function validationLogin()
    {
        $check = true;
        if ($this->checkFields() == false) {

            return $this->errorMessagesLogin["empty"];
            $check = false;
        }
        if ($this->compare() == false) {

            return $this->errorMessagesLogin["check"];
            $check = false;

        }
        if ($check == true) {
            $this->compareUser($this->usernameLogin, $this->userPassword);

        }
        return $check;
    }

    private function checkFields()
    {
        $result = true;
        if (empty($this->usernameLogin) || empty($this->userPassword)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }

    private function compare()
    {
        $result = true;
        if (!$this->compareUser("$this->usernameLogin", "$this->userPassword")) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }


}