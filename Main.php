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


/*class TrainingProgram {
	public $training; 
	public $days;

	public function __construct($training, $days ){
     $this ->training = $training;
     $this ->days = $days;
	 
	}

	public function get_training () {
		$this ->$training;
		$this ->$days;

	}
}*/
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
	<script src="js/bootstrap.bundle.js"> </script>
	
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




	
	<form method ="POST" action="<?php $_SERVER["PHP_SELF"]?>">
<div class="dropdown container-fluid d-flex justify-content-between" style="background-color:black">                                                                     
	<button class ="btn btn-info dropdown-toggle-split m-3 text-center text-nowrap" style="width: 12rem;" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
		Recomended Programs
</button>
<ul class =" dropdown-menu text-center btn-sm bg-dark" aria-labelledby="dropdownMenu2">
	<li><button class="dropdown-item text-uppercase" type="button"style="color:white">Push Pull Legs</button></li>
	<li><button class="dropdown-item text-uppercase" type="button"style="color:white">Upper Lower</button></li>
	<li><button class="dropdown-item text-uppercase" type="button"style="color:white">Full Body Workout</button></li>
	<li><button class="dropdown-item text-uppercase" type="button"style="color:white">Bro Split</button></li>
</ul>
 <button class ="btn btn-info dropdown-toggle-split m-3 text-center text-nowrap" style="width: 10rem;" type="button" id="dropdownMenu3" data-bs-toggle="dropdown" aria-expanded="false">
 Diet
</button>
<ul class="dropdown-menu text-center btn-sm bg-dark " aria-labelledby="dropdownMenu3">
	<li><button class="dropdown-item text-uppercase" type="button"style="color:white">Full Carbs </button></li>
	<li><button class= "dropdown-item text-uppercase" type="button"style="color:white"> Full Fats </button></li>
</ul>

<button class=" btn btn-info dropdown-toggle-split m-3 text-center text-nowrap " style= "width: 10rem;" type="button" id="dropdownMenu4" data-bs-toggle="dropdown" aria-expanded ="false">
Supplements
</button>
<ul class="dropdown-menu text-center btn-sm bg-dark" aria-labelledby="dropdownMenu4" >
	<li><button class="dropdown-item text-uppercase" type="button"style="color:white" > Creatine</button></li>
	<li><button class="dropdown-item text-uppercase" type="button"style="color:white"> Whey</button></li>
	<li><button class="dropdown-item text-uppercase" type="button"style="color:white"> Vitamins</button></li>
</ul>

<button class=" btn btn-info dropdown-toggle-split m-3 text-center text-nowrap" style ="width:10 rem;" type="button" id="dropdownMenu5" data-bs-toggle="dropdown" aria-expanded="false">
Calculator
</button>
<ul class="dropdown-menu text-center btn-sm bg-dark " aria-labelledby="dropdownMenu5" >
	<li><button class ="dropdown-item text-uppercase" type="button"style="color:white"  >Maxes </button> </li>
	<li><button class="dropdown-item text-uppercase" type="button"style="color:white" >Squat </button> </li>
	<li><button class="dropdown-item text-uppercase" type="button" style="color:white">Bench Press</button> </li>
	<li><button class="dropdown-item text-uppercase" type="button" style="color:white"> Dead Lift </button> </li>

</ul>
	
</div>


</form>


	<form method ="POST" action="<?php $_SERVER["PHP_SELF"]?>">
	<div class="d-flex justify-content-between m-3"  role="group">

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
		<div class = "d-flex m-4 p-2" >
     <ul class="d-grid gap-2  list-group ">
	 <form action='' method='post'>
	<button name ="ppl" type="submit" class="btn btn-primary text-uppercase text-center badge bg-dark text-wrap"> Push Pull Legs</button>
	</form>
	
	 <button name ="ul" type="button" class="btn btn-primary text-uppercase text-center badge bg-dark text-wrap">Upper Lower</button>
	
	 <button name= "brs" type="button" class="btn btn-primary text-uppercase text-center badge bg-dark text-wrap">Bro Split</button>
	 <button name= "fbw" type="button" class="btn btn-primary text-uppercase text-center badge bg-dark text-wrap">Full body workout</button>
</ul>
	</div>



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

<ul class="dropdown-menu">
  <li><a class="dropdown-item" href="#">Link 1</a></li>
  <li><a class="dropdown-item" href="#">Link 2</a></li>
  <li><a class="dropdown-item" href="#">Link 3</a></li>
  <li><a class="dropdown-item-text" href="#">Text Link</a></li>
  <li><span class="dropdown-item-text">Just Text</span></li>
</ul>


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



<?php
if(isset($ppl)) {
	?>
	<div class="d-flex justify-content-end" style="display:none">
	<button id="addE" name="addExc" type ="button" class ="btn btn-outline-dark mb-3 btn-sm" onclick="showElement()" >+</button>
	</div>
	<?php
}
?>


<script>
document.getElementById('addE').addEventListener('click', showElement);
    
        function showElement() {
            document.getElementById("add").style.display="block";
        }
        </script>
		
</body>

</html>