<?php
 session_start();


 //SPRAWDZA CZY ZMIENNA JEST W SESJI !
/*if(isset($_SESSION["username"])) {
	echo "istnieje sesja i username jest w tej sesji";
  }else {
	echo " nie ma";
  }
*/

require_once('config.php');
$connection = mysqli_connect("localhost", "root" ,"", "gymweb");

$user_name = $_SESSION["username"];


if($_SERVER["REQUEST_METHOD"] == "POST") {
	$monday = $_POST["monday"];
	$ppl = $_POST["ppl"];
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
<header class="All">
		<h1 class="LOGO">
			Gym&Bear

		</h1>

		<nav class="UL_NAV">
			</ul>
			<?php 
		
	echo "Witaj " . $_SESSION["username"];
		
			?>
			
			<button type="button" class="btn btn-info btn-outline-dark btn-sm">About </button>
			<button type="button" class="btn btn-info btn-outline-dark btn-sm">Contact</button>
			
			
			<form class="Login" action="loginpanel.php">
				<input id="Login" type="submit" value="Login">
			</form>
			<form class="Register" action="register.php">
				<input id="Register" type="submit" value="Register">
			</form>
			
		</nav>
	</header>




	<ul class="APP">
	<form method ="POST" action=<?php $_SERVER["PHP_SELF"]?>>
	
		<li class="Training">Training
			<div class="Training-dropdown">
				<a class= "ppl" href="#"> PPL
				
				</a>
				
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
</form>

	<form method ="POST" action=<?php $_SERVER["PHP_SELF"]?>>
	<div class="d-flex justify-content-between"  role="group">

	<input  class = "btn btn-primary btn-lg border border-dark mx-3 " type="submit" name="monday" value="Monday"></input>

	<input  class = "btn btn-primary btn-lg border border-dark  mx-3" type="submit" name="tuesday" value="Tuesday"> </input>

	<input  class = "btn btn-primary btn-lg border border-dark mx-3 " type="submit" name="wednesday" value="Wednesday"> </input>

	<input  class = "btn btn-primary btn-lg border border-dark mx-3 " type="submit" name="thursday" value="Thursday"> </input>

	<input  class = "btn btn-primary btn-lg border border-dark  mx-3 " type="submit" name="friday" value="Friday"> </input>

	<input  class = "btn btn-primary btn-lg border border-dark mx-3 " type="submit" name="saturday" value="Saturday"> </input>

	<input  class = "btn btn-primary btn-lg border border-dark mx-3" type="submit" name="sunday" value="Sunday"> </input>
</form>
</div>

<?php
	if(isset($monday)) {
		?>
		<div class = "d-flex m-3 " >
     <ul class="d-grid gap-2  list-group ">
	 <form action='' method='post'>
	<button name ="ppl" type="submit" class="btn btn-primary text-uppercase text-center badge bg-dark text-wrap"> Push Pull Legs</button>
	</form>
	 <button name ="ul" type="button" class="btn btn-primary text-uppercase text-center badge bg-dark text-wrap">Upper Lower</button>
	 <button name= "brs" type="button" class="btn btn-primary text-uppercase text-center badge bg-dark text-wrap">Bro Split</button>
	 <button name= "fbw" type="button" class="btn btn-primary text-uppercase text-center badge bg-dark text-wrap">Full body workout</button>
	 
</ul>
<?php
	}
	?>
	<?php
	if(isset($ppl)) {
		?>
		<label class="input-group-text justify-content-center" for="inputGroupSelect01">Push</label>
	<div class = "input-group mb-3"> 
		<select class="form-select" id="inputGroupSelect1">
			<option selected>Choose... </option>
			<option value ="1"> Bench Press</option>
			<option value="2"> Overhead Press</option>
			<option value="3">Dumbell Chest Press </option>
	</select>
	</div>
	
	<?php
	}
	?>

<div id="add" style="display:none">
<div class = "input-group mb-3"> 
		<select class="form-select" id="inputGroupSelect1">
			<option selected>Choose... </option>
			<option value ="1"> Bench Press</option>
			<option value="2"> Overhead Press</option>
			<option value="3">Dumbell Chest Press </option>
	</select>
	</div>
</div>
</div>
</div>

<?php
if(isset($ppl)) {
	?>
	<div class="d-flex justify-content-end" style="display:none">
	<button id="addE" name="addExc" type ="button" class ="btn btn-outline-dark mb-3 btn-sm"  onclick="showElement()">+</button>
	</div>
	<?php
}
?>


<script>
document.getElementById('addE').addEventListener('click', showElement);
    
        function showElement() {

            document.getElementById("add").style.display="block";     
			element.addEventListener("click", showElement);
        }
    
		
        </script>
		
</body>
</html>