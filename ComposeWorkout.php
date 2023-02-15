<?php
include("navbar.php");
include("DropList.php");

?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ComposeWorkout</title>
    <meta name=”viewport” content="width=device-width, initial-scale=1.0">

</head>
<body>
<div class ="container-fluid d-flex justify-content-center">
    <p class="text-uppercase">Compose Your Workout</p>
</div>
<div id="monday" class="d-flex m-4 p-2">
    <div class ="container-fluid d-flex " style="border: solid 2px ">
        <img src="images/Chest.jpg" class="img-fluid" alt="chest" style="width:50px">
        <a class="secondary-link d-flex" href="Chest.php?type=chest">  Chest </a>
    </div>

    <div class ="container-fluid d-flex " style="border: solid 2px">
        <img src="images/Back2.jpg" class="img-fluid" alt="back" style="width:50px">
        <a class="secondary-link d-flex" href="Back.php?type=middle_back">  Back  </a>
    </div>

    <div class ="container-fluid d-flex " style="border: solid 2px">
        <img src="images/Legs.jpg" class="img-fluid" alt="legs" style="width:50px">
        <a class="secondary-link d-flex" href="Legs.php?type=quadriceps">  Legs  </a>
    </div>

    <div class ="container-fluid d-flex " style="border: solid 2px">
        <img src="images/Abs.jpg" class="img-fluid" alt="abs" style="width:50px">
        <a class="secondary-link d-flex" href="Abs.php?type=abdominals">  Abs  </a>
    </div>

    <div class ="container-fluid d-flex " style="border: solid 2px">
        <img src="images/Shouderls.jpg" class="img-fluid" alt="abs" style="width:50px">
        <a class="secondary-link d-flex" href="Shoulders.php?type=shoulders">  Shoulders </a>
    </div>

    <div class ="container-fluid d-flex " style="border: solid 2px">
        <img src="images/Glutes.jpg" class="img-fluid" alt="abs" style="width:50px">
        <a class="secondary-link d-flex" href="Glutes.php?type=glutes">  Glutes </a>
    </div>

    <div class ="container-fluid d-flex " style="border: solid 2px">
        <img src="images/Triceps.jpg" class="img-fluid" alt="abs" style="width:50px">
        <a class="secondary-link d-flex" href="Triceps.php?type=triceps"> Triceps </a>
    </div>

    <div class ="container-fluid d-flex  " style="border: solid 2px">
        <img src="images/Biceps.jpg" class="img-fluid" alt="abs" style="width:50px">
        <a class="secondary-link d-flex" href="Biceps.php?type=biceps">  Biceps </a>
    </div></div>
</body>
