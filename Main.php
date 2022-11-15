<?php



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link  rel="stylesheet" type="text/css" href="Main_style.css">
</head>
<body>
<header class="All">
		<h1 class="LOGO">
			Gym&Bear

		</h1>

		<nav class="UL_NAV">
			</ul>
			<li>About</li>
			<li>Contact</li>
			<form class="Login" action="loginpanel.php">
				<input id="Login" type="submit" value="Login">
			</form>
			<form class="Register" action="register.php">
				<input id="Register" type="submit" value="Register">
			</form>
			</ul>
		</nav>
	</header>

	<div class="IMGBEAR">
		<img src="/images/gymbear2.png" alt="logobear" width="350" height="350"> </img>
	</div>


	<ul class="APP">
		<li class="Training">Training
			<div class="Training-dropdown">
				<a href="#"> PPL</a>
				<a href="#"> FBW</a>
				<a href="#"> UpperLower</a>
				<a href="#"> BroSplit</a>
			</div>
		</li>

		<li class="Diet"> Diet
			<div class="Diet-dropdown">
				<a href="#">Keto</a>
				<a href="#">FullCarb</a>
				<a href="#">Wegan</a>
			</div>
		</li>

		<li class="CC"> Calculator
			<div class="CC-dropdown">
				<a href="#">BMI</a>
				<a href="#">Calories</a>
			</div>
		</li>
		<li class="Suple"> Suplements
			<div class="Suple-dropdown">
				<a href="#">Creatine</a>
				<a href="#">Whey</a>
				<a href="#">Ashwaganda</a>
			</div>
		</li>
		<li class="Max"> MaxWeight
			<div class="Max-dropdown">
				<a href="#">Squat</a>
				<a href="#">Deadlift</a>
				<a href="#">BenchPress</a>
			</div>
		</li>
	</ul>

	<div class="DAYS">
		<button>
			<div class="monday">Monday</div>
		</button>
		<button>
			<div class="tuesday">Tuesday</div>
		</button>
		<button>
			<div class="wednesday">Wednesday</div>
		</button>
		<button>
			<div class="thursday">Thursday</div>
		</button>
		<button>
			<div class="friday">Friday</div>
		</button>
		<button>
			<div class="saturday">Saturday</div>
		</button>
		<button>
			<div class="sunday">Sunday</div>
		</button>


</body>
</html>