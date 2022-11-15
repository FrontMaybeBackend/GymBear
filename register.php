<?php



//zmienne, które przechowują dane od użytkownika.
$user_name="";
$password="";
$email="";

//errors
$user_error="";
$password_error="";
$email_error="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["username"])) {
    $user_error = "Name is required";
  }
   else {
    $user_name = test_input($_POST["username"]);
  }

  if (empty($_POST["email"])) {
    $email_error = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }

  if (empty($_POST["password"])) {
    $password_error = "Password is required!";
  } else {
    $password = test_input($_POST["password"]);
  }

  if(filter_var($email, FILTER_VALIDATE_EMAIL))
  {
      $email_error = "Bad format email !!";
  }
  // DO POPRAWY BO SIĘ WYŚWIETLA JAKO JEDYNE NAWET JAK WYŚLE PUSTY FORMULARZ.
  /*if(strlen($_POST["username"] < 3 || (strlen($_POST["username"] > 12 ))));
  {
      $user_error = " Username must have min 3 lenght!";
  }
  */
  
}


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}




//POŁĄCZENIE Z BAZĄ DANYCH

/*require_once"config.php";
 
$connection = @mysqli_connect("localhost", "root" ,"", "gymweb");
$user_name = $_POST["username"];
$password = $_POST["password"];
$email = $_POST["email"];

$sql = "INSERT INTO `users` (`id`, `username`, `password`, `email`) VALUES ('0', '$user_name', '$password', '$email')";
$rs = mysqli_query($connection, $sql);
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
        .error{
            color:red;
            
        }
        </style>
</head>
<body>
 

<form method="post" action="">

    <div class="register_container">

    <div class="row">
        <div class="col-sm-3">
<label for="username" > Username </label>
<input  class = "form-control" type="text" name="username">
<span class="error">* <?php echo $user_error;?></span>
 

<br><br>

<label for="password" > Password</label>
<input class = "form-control" type ="password" name="password"> </input>
<span class="error">* <?php echo $password_error;?></span>

<br><br>

<label for="email" > Email </label>
<input class = "form-control" type ="email" name= "email"> </input>
<span class="error">* <?php echo $email_error;?></span>

<br><br>


<hr class="mb-3">
<input  class = "btn btn-primary" type="submit" name="create" value="Sign Up"> </input>
</div>
</div>
</div>
</form>




</body>
</html>

