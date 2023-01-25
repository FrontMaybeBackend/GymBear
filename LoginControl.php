<?php
session_start();
class LoginControl
{
       private $username;

       private $email;
       private $password;

       private $repPassword;

       public function __construct($username,$email,$password,$repPassword){
           $this->username->$username;
           $this->email->$email;
           $this->password->$password;
           $this->repPassword->$repPassword;

       }

      private function checkInput(){


          $result = false;
           if(empty($this->username) || empty($this->password) || empty($this->email)|| empty($this->repPassword)){
               $result = false;

           }else{
               test_input($this->username);
               test_input($this->password);
               test_input($this->email);
               $result = true;
           }
           return $result;
      }

      private function validationUser(){
           $result = false;
           if(strlen($this->username) || strlen($this->password))
           {
               $result = false;
           }
           else{
               $result = true;
           }
           return $result;

      }

      private function validationEmail(){
           $result = false;
           if(!filter_var($this->email,FILTER_VALIDATE_EMAIL)){
               $result = false;
           }else{
               test_input($this->email);
               $result = true;
           }
           return $result;
      }

      private function validationPassword(){
         $result  = false;
         if($this ->password !== $this->repPassword){
             $result = false;
         }else{
             test_input($this->password);
             test_input($this->repPassword);
             $result = true;
         }
         return $result;
      }


      private function test_input($data){
          $data = trim($data);
          $data = stripslashes($data);
          $data = htmlspecialchars($data);
          return $data;
      }


}