<?php
session_start();

$username = isset($_SESSION["username"]) ? $_SESSION["username"] : null;

if(isset($_POST["logout"])){
    unset($_SESSION["username"]);
    header("Location: logout.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Welcome!</title>
    <style>

        body{
            background-image: url("https://images.unsplash.com/photo-1604233098531-90b71b1b17a6?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=100");
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
            background-size: 100% 100%;
        }

    </style>
</head>
<body>


<nav class="navbar navbar-expand-sm navbar-dark ">
    <div class="container-fluid">
        <a class="navbar-brand" href="main.php">GymBear</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link " aria-current="page" href="../about/about.php">About</a>
                </li>
                <?php if(!isset($_SESSION["username"])){ ?>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="../authorization/loginPanel.php">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="../authorization/register.php">Register</a>
                    </li>
                <?php } ?>
                <div class="dropdown bg-dark">
                    <?php if(isset($_SESSION["username"])){ ?>
                        <form method="post" class="SignIt" action="">
                            <a  class="btn btn-dark dropdown-toggle " href="Userpanel.php" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                <?php echo  $username ?>
                            </a>
                            <ul class ="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <li><a class="dropdown-item" href="../allProgramms/userProgramms/training.php">Training</a></li>
                                <input class="btn dropdown-item" type="submit" name="logout" value="Logout">
                            </ul>
                        </form>
                    <?php } ?>
                </div>
                <li class="nav-item">
                    <a class="nav-link " href="../allProgramms/recommended/recommendedProgramms.php">Programms</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container-fluid d-sm-flex justify-content-sm-between bg-dark" >

    <button id="recPrograms" class="btn  dropdown-toggle-split m-3 text-center text-nowrap" style=" color:white" type="button" id="dropdownMenu2" data-bs-toggle="dropdown"  aria-expanded="false">
        Recomended Programs
    </button>

    <ul class=" dropdown-menu  text-center btn-sm bg-dark" aria-labelledby="dropdownMenu2">
        <li><a class="dropdown-item text-uppercase" style="color:white" href="../trainings/pushPullLegs.php" value="Push Pull Legs">Push Pull Legs</a></li>
        <li><a class="dropdown-item text-uppercase" href="../trainings/upperLower.php" style="color:white" value="Upper Lower">Upper Lower</a></li>
        <li><a class="dropdown-item text-uppercase" href="../trainings/fullBodyWorkout.php" style="color:white" value="Full Body Workout"> Full Body Workout</a></li>
        <li><a class="dropdown-item text-uppercase" href="../trainings/split.php" style="color:white" value="Bro Split"> Bro Split</a></li>
    </ul>


    <button class="btn  dropdown-toggle-split m-3 text-center text-nowrap" style=" color:white" type="button" id="dropdownMenu3" data-bs-toggle="dropdown" aria-expanded="false">
        Diet
    </button>
    <ul class="dropdown-menu text-center btn-sm bg-dark " aria-labelledby="dropdownMenu3">
        <li><a class="dropdown-item text-uppercase" href="../diets/carbs.php" style="color:white" value=" Carbs"> Carbs </a></li>
        <li><a class="dropdown-item text-uppercase" href="../diets/fats.php" style="color:white" value=" Fats">Fats </a></li>
    </ul>


    <button class=" btn  dropdown-toggle-split m-3 text-center text-nowrap " style=" color:white" type="button" id="dropdownMenu4" data-bs-toggle="dropdown" aria-expanded="false">
        Supplements
    </button>
    <ul class="dropdown-menu text-center btn-sm bg-dark" aria-labelledby="dropdownMenu4">
        <li><a class="dropdown-item text-uppercase" href="../supplements/creatine.php" style="color:white"> Creatine</a></li>
        <li><a class="dropdown-item text-uppercase" href="../supplements/protein.php" style="color:white"> Whey</a></li>
        <li><a class="dropdown-item text-uppercase" href="../supplements/vitamin.php" style="color:white"> Vitamins</a></li>
    </ul>

    <button class=" btn  dropdown-toggle-split m-3 text-center text-nowrap" style=" color:white" type="button" id="dropdownMenu5" data-bs-toggle="dropdown" aria-expanded="false">
        Calculator
    </button>
    <ul class="dropdown-menu text-center btn-sm bg-dark " aria-labelledby="dropdownMenu5">
        <li><a class="dropdown-item text-uppercase" id="1RM" href="../calculators/calculator.php" style="color:white">1RM </a> </li>
        <li><a class="dropdown-item text-uppercase" href="../calculators/calculactorBMI.php" style="color:white">BMI </a> </li>
    </ul>
    <button class=" btn dropdown-toggle-split m-3 text-center text-nowrap " type="button"  aria-expanded="false">
        <a class="dropdown-item " id="1RM" href="../crud/create/composeWorkout.php" style="color:white"> Compose</a>
    </button>

</div>

</body>



</html>
