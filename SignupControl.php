<?php
include('database/SignupConfig.php');

class SignupControl extends SignupConfig
{
       private $username;

       private $email;
       private $password;

       private $repPassword;



       public function __construct($username,$email,$password,$repPassword){
           $this->username=$username;
           $this->email=$email;
           $this->password=$password;
           $this->repPassword=$repPassword;
       }


       public function errors($fieldName)
       {
           return "The $fieldName field is not properly filled.";
       }

       private $errorMessages = array(
           "username" => "Username must have 8 length",
           "password" => "Password must have 8 length",
           "rePassword" =>"Password must be the same",
           "email" => "Email must be in good format",
           "empty" => "Inputs cant be empty",
           "check" => "username and email are get"

       );

       public function displayErrors($fieldName){
           return $this->errorMessages[$fieldName];

       }


       public function Validation(){
           $checkThisShit = true;
           if($this->checkInput() == false){
               return $this->errorMessages["empty"];
               $checkThisShit = false;
           }
           if($this->validationUser() == false){
               return $this->errorMessages["username"];
               $checkThisShit = false;
           }
           if($this->validationEmail() == false) {
               return $this->errorMessages["email"];
               $checkThisShit = false;
           }
           if($this->validationPassword() == false){
               return $this->errorMessages["password"];
               $checkThisShit = false;
           }
           if($this->check() == false){
               return $this->errorMessages["check"];
               $checkThisShit = false;
           }if(!$checkThisShit){
               $this->setUser("$this->username", "$this->password", "$this->email");
               header("location:loginpanel.php");
           }
       }

      private function checkInput(){


          $result = true;
           if(empty($this->username) || empty($this->password) || empty($this->email)|| empty($this->repPassword)){
               $result = false;

           }else{
               $result = true;
           }
           return $result;
      }


          private
          function validationUser()
          {
              $result = true;
              if (strlen($this->username < 8)) {
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
              if(strlen($this->password < 8)){
                  $result = false;
              }
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
              if ($this->checkUser($this->username)) {
                  $result = false;
              } else {
                  $result = true;
              }
              return $result;
          }

// COŚ Z BAZĄ JEST NIE TAK TRZEBA OGARNAC JUTRO !


}
?>