<?php

include("connect.php");
class SignupConfig extends connect
{

    public function checkUser($username)
    {
        $stmt = $this->connected()->prepare("SELECT username FROM users WHERE username =:username");
        $stmt->bindParam(':username', $username,);
        $stmt->execute();
        $result = $stmt->fetch();
        if ($result > 0) {
            $stmt = null;
            exit();
        }

    }




    protected function setUser($username,$password,$email){
        $stmt = $this->connected()->prepare("INSERT INTO `users` (`username`, `password`, `email`) VALUES (?,?,?)");
        $hashedPass = password_hash("$password", PASSWORD_DEFAULT);
        $stmt->bindParam(1, $username, PDO::PARAM_STR);
        $stmt->bindParam(2, $hashedPass, PDO::PARAM_STR);
        $stmt->bindParam(3, $email, PDO::PARAM_STR);
        $stmt->execute();
        exit();
    }


}

?>