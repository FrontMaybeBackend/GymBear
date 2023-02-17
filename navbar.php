<?php

session_start();

$username = isset($_SESSION["username"]) ? $_SESSION["username"] : null;

if(isset($_POST["logout"])){
    unset($_SESSION["username"]);
    header("Location: Logout.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="navbar.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

</head>

<body>
    <nav class="navbar navbar-expand-md navbar-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="Main.php">GymBear</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="loginpanel.php">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="register.php">Register</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="RecommendedProgramms.php">Programms</a>
                    </li>
                    <div class="dropdown bg-dark">
                        <?php if(isset($_SESSION["username"])){ ?>
                            <form method="post" class="SignIt" action="">
                                <a  class="btn btn-dark dropdown-toggle " href="Userpanel.php" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                    <?php echo  $username ?>
                                </a>
                                <ul class ="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <li><a class="dropdown-item" href="Training.php">Training</a></li>
                                <input class="btn dropdown-item" type="submit" name="logout" value="Logout">
                                </ul>
                            </form>
                        <?php } ?>
                    </div>

                </ul>
            </div>
        </div>

    </nav>



    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100 h-80" src="images/gymMain.jpg" alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Training!</h5>
                    <p>Get your Training to the NEXT LEVEL !</p>
                </div>
            </div>
        </div>
    </div>


</body>
<script type="text/javascript" src="Scripts/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="Scripts/bootstrap.min.js"></script>

</html>

