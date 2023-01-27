<?php
include("connect.php");
class LoginConfig extends connect
{

    public function compareUser($usernameLogin)
    {
        $databaseL = new connect();
        $conn = $databaseL->getConnection();
        $stmt = $conn->prepare("SELECT username FROM users WHERE username =:usernameLogin");
        $stmt->bindParam(':usernameLogin', $usernameLogin);
        $stmt->execute();

        while($stmt->rowCount() > 0) {
            $stmt = null;
            exit();

        }

    }

    public function loginUser($usernameLogin, $userPassword){
        $databaseL = new connect();
        $conn = $databaseL ->getConnection();
        $stmt = $conn->prepare("SELECT username FROM users WHERE username =:usernameLogin AND password =:userPassword");
        $stmt ->bindParam(':usernameLogin', $usernameLogin);
        $stmt ->bindParam(':userPassword', $userPassword);
        $stmt->execute();
        while($stmt->rowCount() > 0){
            $stmt = null;
            header("Location:Main.php");
            exit();
        }

    }

}