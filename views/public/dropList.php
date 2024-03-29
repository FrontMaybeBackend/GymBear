<?php

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="../../css/myStyles/mainStyle.css">
    <link rel="stylesheet" type="text/css" href="../../css/bootstrap.min.css">
    <script src="../../js/bootstrap.bundle.js"> </script>
    <meta name=”viewport” content="width=device-width, initial-scale=1.0">
</head>
<style>

    </style>
<body>

    <div class="dropdown bg-dark dropdown-menu-lg-end " >

        <button id="recPrograms" class="btn  dropdown-toggle-split m-3 text-center text-nowrap" style="width: 12rem; color:white" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
            Recomended Programs
        </button>

        <ul class=" dropdown-menu  text-center btn-sm bg-dark" aria-labelledby="dropdownMenu2">
            <li><a class="dropdown-item text-uppercase" style="color:white" href="../trainings/pushPullLegs.php" value="Push Pull Legs">Push Pull Legs</a></li>
                <li><a class="dropdown-item text-uppercase" href="../trainings/upperLower.php" style="color:white" value="Upper Lower">Upper Lower</a></li>
                <li><a class="dropdown-item text-uppercase" href="../trainings/fullBodyWorkout.php" style="color:white" value="Full Body Workout"> Full Body Workout</a></li>
                <li><a class="dropdown-item text-uppercase" href="../trainings/split.php" style="color:white" value="Bro Split"> Bro Split</a></li>
        </ul>


        <button class="btn  dropdown-toggle-split m-3 text-center text-nowrap" style="width: 10rem; color:white" type="button" id="dropdownMenu3" data-bs-toggle="dropdown" aria-expanded="false">
            Diet
        </button>
        <ul class="dropdown-menu text-center btn-sm bg-dark " aria-labelledby="dropdownMenu3">
                <li><a class="dropdown-item text-uppercase" href="../diets/carbs.php" style="color:white" value=" Carbs"> Carbs </a></li>
                <li><a class="dropdown-item text-uppercase" href="../diets/fats.php" style="color:white" value=" Fats">Fats </a></li>
        </ul>


        <button class=" btn  dropdown-toggle-split m-3 text-center text-nowrap " style="width: 10rem; color:white" type="button" id="dropdownMenu4" data-bs-toggle="dropdown" aria-expanded="false">
            Supplements
        </button>
        <ul class="dropdown-menu text-center btn-sm bg-dark" aria-labelledby="dropdownMenu4">
            <li><a class="dropdown-item text-uppercase" href="../supplements/creatine.php" style="color:white"> Creatine</a></li>
            <li><a class="dropdown-item text-uppercase" href="../supplements/protein.php" style="color:white"> Whey</a></li>
            <li><a class="dropdown-item text-uppercase" href="../supplements/vitamin.php" style="color:white"> Vitamins</a></li>
        </ul>

        <button class=" btn  dropdown-toggle-split m-3 text-center text-nowrap" style="width:10 rem; color:white" type="button" id="dropdownMenu5" data-bs-toggle="dropdown" aria-expanded="false">
            Calculator
        </button>
        <ul class="dropdown-menu text-center btn-sm bg-dark " aria-labelledby="dropdownMenu5">
            <li><a class="dropdown-item text-uppercase" id="1RM" href="../calculators/calculator.php" style="color:white">1RM </a> </li>
            <li><a class="dropdown-item text-uppercase" href="../calculators/calculactorBMI.php" style="color:white">BMI </a> </li>
        </ul>
        <button class=" btn dropdown-toggle-split m-3 text-center text-nowrap " style="width:10 rem;" type="button"  aria-expanded="false">
            <a class="dropdown-item " id="1RM" href="../crud/create/composeWorkout.php" style="color:white"> Compose</a>
        </button>

    </div>


</body>

</html>

