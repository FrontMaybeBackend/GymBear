<?php

include("connect.php");
class LoginConfig extends connect
{

    public function compareUser($usernameLogin,$userPassword)
    {
        $databaseL = new connect();
        $conn = $databaseL->getConnection();
        $stmt = $conn->prepare("SELECT password,role FROM users WHERE username =:usernameLogin");
        $stmt->bindParam(':usernameLogin', $usernameLogin);
        $stmt->execute();

        if($stmt->rowCount() > 0) {
            $row = $stmt->fetch();
            $hashedPass = $row['password'];
            $role = $row['role'];
            if(password_verify($userPassword, $hashedPass)) {
                if($role == 'admin'){
                header("Location:MainAdmin.php");
                exit();
                }else{
                    header("Location:Main.php");
                    exit();
                }
            }
        }
        else {
            echo "Username not found";
            }
    }


}