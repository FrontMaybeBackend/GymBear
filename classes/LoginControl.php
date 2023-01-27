<?php

namespace classes;
include("database/LoginConfig.php");
class LoginControl extends \LoginConfig
{
private $usernameLogin;
private $passwordLogin;


public function __construct($usernameLogin, $passwordLogin){
    $this->usernameLogin=$usernameLogin;
    $this->passwordLogin=$passwordLogin;
}



    private array $errorMessagesLogin = array(
        "empty" => "Inputs cant be empty",
        "check" => "We dont have this account",
    );



    public function validationLogin(){
        $check = true;
        if($this->checkFields() == false){

            return $this->errorMessagesLogin["empty"];
            $check = false;
        }if($this->compare() == false){

            return $this->errorMessagesLogin["check"];
            $check = false;

        }
    }
private function checkFields (){
    $result = true;
    if(empty($this ->usernameLogin) || empty($this ->passwordLogin)){
        $result = false;
    }else{
        $result = true;
    }
    return $result;
}

private function compare(){
        $result = true;
        if($this->compareUser("$this->usernameLogin")){
            $result = false;
        }else{
            $result = true;
        }
        return $result;

}



}