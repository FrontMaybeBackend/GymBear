<?php

session_start();

//SPRAWDZA CZY ZMIENNA JEST W SESJI !
include_once("Main.php");
require_once('config.php');
$connection = mysqli_connect("localhost", "root" ,"", "gymweb");

$_SESSION["pplWorkout"] = $pplW;


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link  rel="stylesheet" type="text/css" href="Main_style.css">
</head>
<body>

		


</body>
</html>