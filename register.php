<?php
session_start();


require_once"config.php";
 
$connection = @mysqli_connect("localhost", "root" ,"", "gymweb");


//errors
$user_error="";
$password_error="";
$email_error="";
$registration="";
$login="";
$fail_connect = false;

 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $user_name=$_POST["username"];
  $password=$_POST["password"];
  $hashed_password = password_hash($password, PASSWORD_DEFAULT);
  $email=$_POST["email"];

  if (empty($user_name)) {
    $user_error = "Name is required";
    $fail_connect = true;
  }
   else{
    $user_name = test_input($user_name);
    
   
  if(strlen($user_name) < 8 ){
    $user_error ="Name must have 8 length.";
    $fail_connect =true;
  } 
  $sql = "SELECT username FROM users WHERE username='{$user_name}'";
  $result = mysqli_query($connection,$sql) or die("Query unsuccessful") ;
 if (mysqli_num_rows($result) > 0) {
   $user_error="Username is already taken";
   $fail_connect = true;
 }

}
   
  if (empty($email)) {
    $email_error = "Email is required";
    $fail_connect = true;

  } else { 
    $email = test_input($email);
    
  
  if(!filter_var($email, FILTER_VALIDATE_EMAIL))
  {
      $email_error = "Bad format email !!";
      $fail_connect = true;
  }
  $sql = "SELECT email FROM users where email = '{$email}'";
  $result = mysqli_query($connection, $sql) or die ("Query unseccesful");
  if(mysqli_num_rows($result) > 0) {
    $email_error =" Email is already taken";
    $fail_connect = true;
  }

}

  if (empty($password)) {
    $password_error = "Password is required!";
    $fail_connect = true;
  } else {
    $password = test_input($password);
  
  if(strlen($password) < 8 ){
    $password_error ="passwwordmust have 8 length.";
    $fail_connect = true;
  }
}
      

if(!$fail_connect) {
  $registration = "welcome to gymbear!";
  $sql = "INSERT INTO `users` (`id`, `username`, `password`, `email`) VALUES ('0', '$user_name', '$password', '$email')";
   $rs = mysqli_query($connection, $sql);
  header("location:loginpanel.php");
  exit();
 }
}


             
      
  


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}




///POŁĄCZENIE Z BAZĄ DANYCH



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

        #login{
    position: absolute;
    left: 620px;
    top: 580px;
}
        </style>
</head>
<body>
 

<form  method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

    <div id="register" class="register_container">

    <div class="row">
        <div class="col-sm-3 container-fluid p-5 ">
<label for="username" > Username </label>
<input  class = "form-control" type="text" name="username" >
<span class="error">* <?php echo $user_error;?></span>
 

<br><br>

<label for="password" > Password</label>
<input class = "form-control" type ="password" name="password" > </input>
<span class="error">* <?php echo $password_error;?></span>

<br><br>

<label for="email" > Email </label>
<input class = "form-control" type ="email" name= "email" > </input>
<span class="error">* <?php echo $email_error;?></span>

<br><br>

  <span class="error">* <?php echo $registration;?></span>
 
  
 
<hr class="mb-3">
<input  class = "btn btn-primary" type="submit" name="create" value="Sign Up"> </input>

</div>
</div>
</div>
</form>
<form method="post" action= "loginpanel.php">
<input  class = "btn btn-primary" type="submit" name="create" value="Login"> If you have account, click here </input>
</form>


  





</body>
</html>

