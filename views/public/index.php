<?php


include("navbaro.php");
include("../../database/DisplayRecomennded.php");
include("../../classes/Calculator.php");




if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $monday = $_POST["monday"];
}





?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <meta name=”viewport” content="width=device-width, initial-scale=1.0">


</head>

<body>



<div class="container-fluid d-flex justify-content-between p-2 row w-25" >
    <button type="button"  class="btn btn-dark "> <a class="text-decoration-none text-light" href="../days/monday.php" >Monday</a></button>
    <button type="button" class="btn btn-dark "> <a class="text-decoration-none text-light" href="../days/tuesday.php" >Tuesday</a></button>
    <button type="button" class="btn btn-dark "> <a  class="text-decoration-none text-light"href="../days/wednesday.php" >Wednesday</a></button>
    <button type="button" class="btn btn-dark "> <a class="text-decoration-none text-light" href="../days/thursday.php" >Thursday</a></button>
    <button type="button" class="btn btn-dark "> <a class="text-decoration-none text-light" href="../days/friday.php" >Friday</a></button>
    <button type="button" class="btn btn-dark "> <a class="text-decoration-none text-light" href="../days/saturday.php" >Saturday</a></button>
    <button type="button" class="btn btn-dark "><a class="text-decoration-none text-light" href="../days/sunday.php" >Sunday</a></button>
</div>







</body>
<?php include("footer.php");?>
</html>

