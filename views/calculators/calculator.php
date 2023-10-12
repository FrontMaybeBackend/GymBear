<?php

include("navbaro.php");





if(isset($_POST['Calculate'])){

    include("classes/Calculator.php");
    $weight = $_POST['Weight'];
    $reps = $_POST['Reps'];
    $OneRepMax = new \classes\Calculator("$weight", "$reps");
    $Calculate = $OneRepMax ->OneRepMax();
    ?>
    <?php


}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="Main_style.css">
    <meta name=”viewport” content="width=device-width, initial-scale=1.0">
    <style>
        .form-label{
            color: white;
        }
    </style>
</head>

<form id = "4" method="POST" >
    <div class="mb-3" >
        <label for="Weight" class="form-label" > Weight</label >
        <input type = "text" class="form-control" name="Weight" id = "Weight" >
    </div >
    <div class="mb-3" >
        <label for="Reps" class="form-label" > Reps</label >
        <input type = "text" class="form-control" name="Reps" id = "Reps" >
    </div >
    <button class="p-2  m-3 align-content-end d-flex" id="Calculate" type="submit" name="Calculate">Calculate</button>
    <label for="Score" class="form-label center" > Your One Rep Max: <?php if(isset($Calculate)){ echo $Calculate;} ?></label>

</form >
<?php include("footer.php");?>