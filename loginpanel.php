<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LoginPanel</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    
</head>
<body>
 
<form class="SignIt" action="login.php">
        <div class="form_input-container">

            <input type="text" id="username" name="username" placeholder=" "> </input>
            <label for="Username"> Username</label>
        </div>


        <div class="form_input-container">

            <input type="password" id="password" name="password" minlength="8" required placeholder=" ">
            <label for="Password"> Password </label>
        </div>

        
<input  class = "btn btn-primary" type="submit" name="login" value="Sign Up"> </input>

       
    </form>

    <?php
$validation_error = "";
$user_url = "";
$form_message = "";



?>
    
</body>
</html>