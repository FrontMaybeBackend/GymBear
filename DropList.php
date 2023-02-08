<?php

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
    <script src="js/bootstrap.bundle.js"> </script>
    <meta name=”viewport” content="width=device-width, initial-scale=1.0">

</head>

<body>

<form method="POST" action="" ;>
    <div class="dropdown ">

        <button id="recPrograms" class="btn  dropdown-toggle-split m-3 text-center text-nowrap" style="width: 12rem;" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
            Recomended Programs
        </button>

        <ul class=" dropdown-menu text-center btn-sm bg-dark" aria-labelledby="dropdownMenu2">

            <li><input class="dropdown-item text-uppercase" type="submit" name="pplR" style="color:white" value="Push Pull Legs"></input></li>


            <form method="POST" action="<?php $_SERVER["PHP_SELF"] ?>" ;>
                <li><input class="dropdown-item text-uppercase" type="submit" name="upl" style="color:white" value="Upper Lower"></input></li>
            </form>

            <form method="POST" action="<?php $_SERVER["PHP_SELF"] ?>" ;>
                <li><input class="dropdown-item text-uppercase" type="submit" name="fbw" style="color:white" value="Full Body Workout"></input></li>
            </form>

            <form method="POST" action="<?php $_SERVER["PHP_SELF"] ?>" ;>
                <li><input class="dropdown-item text-uppercase" type="submit" name="split" style="color:white" value="Bro Split"></input></li>
        </ul>


        <button class="btn  dropdown-toggle-split m-3 text-center text-nowrap" style="width: 10rem;" type="button" id="dropdownMenu3" data-bs-toggle="dropdown" aria-expanded="false">
            Diet
        </button>
        <ul class="dropdown-menu text-center btn-sm bg-dark " aria-labelledby="dropdownMenu3">

            <form method="POST" action="<?php $_SERVER["PHP_SELF"] ?>" ;>
                <li><input class="dropdown-item text-uppercase" type="submit" name="Carb" style="color:white" value=" Carbs"> </input></li>
            </form>

            <form method="POST" action="<?php $_SERVER["PHP_SELF"] ?>" ;>
                <li><input class="dropdown-item text-uppercase" name="Fats" type="submit" style="color:white" value=" Fats"> </input></li>
            </form>
        </ul>


        <button class=" btn  dropdown-toggle-split m-3 text-center text-nowrap " style="width: 10rem;" type="button" id="dropdownMenu4" data-bs-toggle="dropdown" aria-expanded="false">
            Supplements
        </button>
        <ul class="dropdown-menu text-center btn-sm bg-dark" aria-labelledby="dropdownMenu4">
            <li><button class="dropdown-item text-uppercase" type="button" style="color:white"> Creatine</button></li>
            <li><button class="dropdown-item text-uppercase" type="button" style="color:white"> Whey</button></li>
            <li><button class="dropdown-item text-uppercase" type="button" style="color:white"> Vitamins</button></li>
        </ul>

        <button class=" btn  dropdown-toggle-split m-3 text-center text-nowrap" style="width:10 rem;" type="button" id="dropdownMenu5" data-bs-toggle="dropdown" aria-expanded="false">
            Calculator
        </button>
        <ul class="dropdown-menu text-center btn-sm bg-dark " aria-labelledby="dropdownMenu5">
            <li><button class="dropdown-item text-uppercase" id="1RM" name="1RM" type="submit" style="color:white">1RM </button> </li>
            <li><button class="dropdown-item text-uppercase" type="button" style="color:white">BMI </button> </li>
        </ul>
    </div>
</form>

