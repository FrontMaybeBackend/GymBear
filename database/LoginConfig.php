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
        $result = $stmt->fetch();
        while($result === 1) {
            $stmt = null;
            exit();

        }

    }

}