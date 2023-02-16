<?php



//SPRAWDZA CZY ZMIENNA JEST W SESJI !
include_once("Main.php");
require_once('database/connect.php');


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" type="text/css" href="Main_style.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <meta name=”viewport” content="width=device-width, initial-scale=1.0">
  <link rel=”stylesheet” href=”css/bootstrap.css”>
  <link rel=”stylesheet” href=”css/bootstrap-responsive.css”>
</head>

<body>
<div class="container-fluid d-flex justify-content-between p-2" >
    <button type="button"  class="btn btn-dark "> <a class="text-decoration-none text-light" href="Monday.php" >Monday</a></button>
    <button type="button" class="btn btn-dark "> <a class="text-decoration-none text-light" href="Tuesday.php" >Tuesday</a></button>
    <button type="button" class="btn btn-dark "> <a  class="text-decoration-none text-light"href="Wednesday.php" >Wednesday</a></button>
    <button type="button" class="btn btn-dark "> <a class="text-decoration-none text-light" href="Thursday.php" >Thursday</a></button>
    <button type="button" class="btn btn-dark "> <a class="text-decoration-none text-light" href="Friday.php" >Friday</a></button>
    <button type="button" class="btn btn-dark "> <a class="text-decoration-none text-light" href="Saturday.php" >Saturday</a></button>
    <button type="button" class="btn btn-dark "><a class="text-decoration-none text-light" href="Sunday.php" >Sunday</a></button>
</div>
</body>

</html>