<?php


use classes\SignupControl;

if(isset($_POST["create"])){


    include("SignupControl.php");

    $username = $_POST["username"];
    $password = $_POST["password"];
    $email = $_POST["email"];
    $repPassword = $_POST["passwordRepeat"];
    $user = new SignupControl("$username","$email", "$password", "$repPassword");


    $checkIt = $user->  validation();
    if($checkIt){
        echo '<div class="error">' . $checkIt . '</div>';
    }



}




?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <link rel="stylesheet" type="text/css" href="../../css/bootstrap.min.css">
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
            <label  class="d-flex justify-content-center " for="passwordRepeat"> Repeat Password</label>
            <input class="form-control" type="password" name="passwordRepeat"> </input>
            <br><br>
          <label class="d-flex justify-content-center " for="email"> Email </label>
          <input class="form-control" type="email" name="email"> </input>

          <br><br>

          <hr class="mb-3">
         <div class="d-flex justify-content-center align-items-center">
          <input class="btn btn-light " type="submit" name="create" value="Sign Up"> </input>
            </div>
        </div>
      </div>
    </div>

  </form>









</body>

</html>