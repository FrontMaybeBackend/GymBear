<?php

include("Connect.php");

class SignupConfig extends connect
{


    public function checkUser($username)
    {
        $database = new connect();
        $conn = $database->getConnection();
        $stmt = $conn->prepare("SELECT username FROM users WHERE username =:username");
        $stmt->bindParam(':username', $username,);
        $stmt->execute();
        $result = $stmt->fetch();
        while ($result) {
            $stmt = null;
            exit();

        }

    }


    public function setUser($username, $password, $email)
    {
        $database = new connect();
        $conn = $database->getConnection();
        $stmt = $conn->prepare("INSERT INTO users (`username`, `password`, `email`) VALUES (?,?,?)");
        $hashedPass = password_hash("$password", PASSWORD_DEFAULT);
        $stmt->bindParam(1, $username,);
        $stmt->bindParam(2, $hashedPass,);
        $stmt->bindParam(3, $email,);
        $stmt->execute();
        header("Location:loginPanel.php");
        exit();
    }

}

?>