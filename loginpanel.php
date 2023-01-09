<?php
session_start();
require_once("config.php");
$connection = mysqli_connect("localhost", "root", "", "gymweb");



$user_error = "";
$password_error = "";
$fail_form = false;
$login_error = "";

// WALIDACJA, JEŚLI POLA SĄ PUSTE TO NIE PRZEJDZIE FORMULARZ, JEŚLI NIE MA DANYCH W BAZIE TO TEŻ NIE.

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_name = $_POST["username"];
    $password = $_POST["password"];
    if (isset($_POST["login"])) {

        if (empty($user_name)) {
            $user_error  = "please enter username.";
            $fail_form = true;
        }
        if (empty($password)) {
            $password_error = "please enter password";
            $fail_form = true;
        }
        $sql = "SELECT username FROM users WHERE username = '$user_name' AND password = '$password'";
        $result = mysqli_query($connection, $sql);
        if (mysqli_num_rows($result) === 1) {
            header("Location:Main.php");
        } else {
            $login_error = " we dont have this account in DB";
        }
        if (!$fail_form) {
            $_SESSION["username"] = $user_name;
        }
        $sql = "SELECT * FROM adminpanel WHERE admin  = '$user_name' AND admin  = '$password'";
        $result = mysqli_query($connection, $sql);
        if (mysqli_num_rows($result) === 1) {
            header("Location:MainAdmin.php");
        } else {
            $login_error = " we dont have this account in DB";
        }
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

    <form method="post" class="SignIt" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <div class="form_input-container">

            <input type="text" id="username" name="username" placeholder=" "> </input>
            <label for="Username"> Username</label>
            <span class="error"> * <?php echo $user_error; ?></span>
        </div>


        <div class="form_input-container">

            <input type="password" id="password" name="password" placeholder=" ">
            <label for="Password"> Password </label>
            <span class="error"> * <?php echo $password_error; ?></span>


        </div>
        <span class="error"> * <?php echo $login_error; ?></span>

        <input class="btn btn-primary" type="submit" name="login" value="Login"> </input>


    </form>


</body>

</html>