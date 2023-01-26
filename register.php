<?php





if($_SERVER["REQUEST_METHOD"] == 'POST'){


    include("SignupControl.php");

    $username = $_POST["username"];
    $password = $_POST["password"];
    $email = $_POST["email"];
    $repPassword = $_POST["passwordRepeat"];
    $user = new SignupControl("$username","$email", "$password", "$repPassword");


    $checkIt = $user->validation();
    if($checkIt){
        echo '<div class="error">' . $checkIt . '</div>';
    }





}

//errors

/*if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $user_name = $_POST["username"];
  $password = $_POST["password"];
  $hashed_password = password_hash($password, PASSWORD_DEFAULT);
  $email = $_POST["email"];




    }
    $stmt = $conn->prepare("SELECT email FROM users where email =:email");
    $stmt->bindParam(':email', $email);
    $stmt->execute();
    $result = $stmt->fetch();
    if ($result > 0) {
      $email_error = " Email is already taken";
      $fail_connect = true;
    }
  }




  /*if (!$fail_connect) {
    $registration = "welcome to gymbear!";
    $stmt = $conn->prepare("INSERT INTO `users` (`username`, `password`, `email`) VALUES (?,?,?)");
    $stmt->bindParam(1, $user_name, PDO::PARAM_STR);
    $stmt->bindParam(2, $password, PDO::PARAM_STR);
    $stmt->bindParam(3, $email, PDO::PARAM_STR);
    $stmt->execute();
    header("location:loginpanel.php");
    exit();
  }
}

*/



?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <style>
    .error {
      color: red;

    }

    #login {
      position: absolute;
      left: 620px;
      top: 580px;
    }
  </style>
</head>

<body>


  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

    <div id="register" class="register_container">

      <div class="row">
        <div class="col-sm-3 container-fluid p-5 ">
          <label for="username"> Username </label>
          <input class="form-control" type="text" name="username">




          <br><br>

          <label for="password"> Password</label>
          <input class="form-control" type="password" name="password"> </input>


          <br><br>

            <label for="passwordRepeat"> Repeat Password</label>
            <input class="form-control" type="password" name="passwordRepeat"> </input>


            <br><br>

          <label for="email"> Email </label>
          <input class="form-control" type="email" name="email"> </input>


          <br><br>





          <hr class="mb-3">
          <input class="btn btn-primary" type="submit" name="create" value="Sign Up"> </input>

        </div>
      </div>
    </div>
  </form>
  <form method="post" action="loginpanel.php">
    <input class="btn btn-primary" type="submit" name="create" value="Login"> If you have account, click here </input>
  </form>








</body>

</html>