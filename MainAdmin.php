<?php

session_start();

//SPRAWDZA CZY ZMIENNA JEST W SESJI !
include_once("Main.php");
require_once('config.php');
$connection = mysqli_connect("localhost", "root" ,"", "gymweb");

$_SESSION["pplWorkout"] = $pplW;
 
if($_SERVER["REQUEST_METHOD"] =="POST") {
    $programms = $_POST["programms"];
 if(isset($_POST["upl"]) || $_POST["pplR"] ){
 ?>
 <form method = "POST">
 <button type="button" id="button">AddWorkout</button>
<div id="text" style="display:none">
  <label  for="programms">Wpisz tekst:</label><br>
  <textarea id ="programms" name ="programms" rows="15" cols="100"></textarea>
  <input name="send" type="submit" value="Add"></input>
 </form>
</div>
 <?php
 
}
if(isset($_POST["send"])) {
    $sql = "INSERT INTO `adminpanel` (`id`,`programs`) VALUES ('0', '$programms')";
    $rs = mysqli_query($connection, $sql);
}
}if(isset($_POST["pplR"])){
    $sql = "SELECT * FROM `adminpanel`";
    $rs = mysqli_query($connection, $sql);
    while($row = mysqli_fetch_array($rs)){
        echo $row["programs"]. "<br>";
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
    <link  rel="stylesheet" type="text/css" href="Main_style.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>

<script>
  document.getElementById('button').onclick = function() {
    document.getElementById('text').style.display = 'block';
  }
</script>



</body>
</html>