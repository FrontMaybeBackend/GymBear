<?php

session_start();

//SPRAWDZA CZY ZMIENNA JEST W SESJI !
include_once("Main.php");
require_once('config.php');
$connection = mysqli_connect("localhost", "root" ,"", "gymweb");

$_SESSION["pplWorkout"] = $pplW;
 
if($_SERVER["REQUEST_METHOD"] =="POST") {
    $programms = $_POST["programms"];
    $title = $_POST["title"];
    $img = $_POST["img"];
 if(isset($_POST["upl"]) || $_POST["pplR"] ){
 ?>
 <form method = "POST" >
 <button type="button" id="button">AddWorkout</button>
 <div id="title" class = "form-floating-mb-3" style="display:none">
 <input name ="title"type="text" class="form-control" id="title">
 </div>
 <div id="img" class="form-floating-mb-3" style="display:none">
  <input name="img" type="file" class="form-control" id="img" Value="upload" >
 </div>
<div id="text" style="display:none">
  <label  for="programms"></label><br>
  <textarea id ="programms" name ="programms" rows="15" cols="100" placeholder="Text"></textarea>
  <input name="send" type="submit" value="Add"></input>
 </form>
</div>
 <?php
 
}
if(isset($_POST["send"])) {
    $sql = "INSERT INTO `adminpanel` (`id`,`programs`, `title`,`img`) VALUES ('', '$programms', '$title' , '$img')";
    $rs = mysqli_query($connection, $sql);
}
}if(isset($_POST["pplR"])){
 
    $sql = "SELECT * FROM `adminpanel`";
    $rs = mysqli_query($connection, $sql);
    while($row = mysqli_fetch_array($rs)){
       ?>
        <div class="card text-center mb-3" style="width: 18rem;">
        <div class="card-header">
  <img src="./images/<?php echo $row['img']?>" class="card-img-center img-fluid">
    </div>
  <div class = "col-md-8">
  <div class="card-body ">
    <h5 class="card-title text-primary"><?php echo $row['title']?></h5>
    <p class="card-text text-warning"><?php  echo substr($row['programs'],0,100)?> ... </p>
    <a href="#" class="btn btn-primary">Go somewhere</a>

  </div>
    </div>
</div>
       <?php
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
    document.getElementById('title').style.display = 'block';
    document.getElementById('img').style.display = 'block';
  }
</script>



</body>
</html>