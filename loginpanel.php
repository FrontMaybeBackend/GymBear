<?php
session_start();

use classes\LoginControl;

if(isset($_POST["login"])) {

    include("classes/LoginControl.php");
    $usernameLogin = $_POST["username"];
    $userPassword = $_POST["password"];
    $_SESSION["username"] = $usernameLogin;


    $userLogin = new LoginControl("$usernameLogin", "$userPassword");



    $checkLog = $userLogin->validationLogin();
    if($checkLog){
        echo '<div class="error">' . $checkLog . '</div>';
    }

}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LoginPanel</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

    <style>
        .error {
            color: red;

        }
    </style>
</head>

<body>

    <form method="post" class="SignIt" action="">
        <div class="form_input-container">

            <input type="text" id="username" name="username" placeholder=" "> </input>
            <label for="Username"> Username</label>
        </div>


        <div class="form_input-container">
            <input type="password" id="password" name="password" placeholder=" ">
            <label for="Password"> Password </label>
        </div>


        <input class="btn btn-primary" type="submit" name="login" value="Login"> </input>


    </form>


</body>

</html>