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

    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

    <style>
        .error {
            color: red;
            text-align: center;

        }
        body{
            background-color: black;
        }
    </style>
</head>

<body>



    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

        <div id="register" class="register_container w-100 d-flex justify-content-center align-items-center ">

            <div class="row">
                <div class="col-sm-3 container-fluid m-5 p-4  w-100 bg-dark mx-auto h-100 " style="color:white;  box-shadow: 0px -1px 15px 10px darkslateblue;">
                    <label class="d-flex justify-content-center " for="username"> Username </label>
                    <input class="form-control " type="text" name="username">
                    <br><br>
                    <label class="d-flex justify-content-center " for="password"> Password</label>
                    <input class="form-control" type="password" name="password"> </input>
                    <br><br>


                    <hr class="mb-3">
                    <div class="d-flex justify-content-center align-items-center">
                        <input class="btn btn-light " type="submit" name="login" value="Login"> </input>
                    </div>
                </div>
            </div>
        </div>

    </form>

</body>

</html>