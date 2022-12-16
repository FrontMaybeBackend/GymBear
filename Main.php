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
	<form action ="">
		 <h1 class="LOGO"> 
			<button style="background-color:transparent;color: white;"> Gym&Bear</button>
		</h1>
</form>
 
		<nav class="UL_NAV">

			<?php 
		
	echo "Witaj " . $_SESSION["username"];
		
			?>
			
			<button type="button" class="btn btn-info btn-outline-dark btn-sm">About </button>
			<button type="button" class="btn btn-info btn-outline-dark btn-sm">Contact</button>


			<div class="d-grid gap-2 d-md-block btn-sm">
			<form class="Login" action="loginpanel.php">
  <button class="btn btn-primary" type="submit">Logout</button>
  </form>
</div>
			
			
		</nav>
	</header>




	
	<form method="POST" action ="";>     
<div class="dropdown container-fluid d-flex justify-content-between" style="background-color:black">        
                                                        
	<button id="recPrograms" class ="btn btn-info dropdown-toggle-split m-3 text-center text-nowrap" style="width: 12rem;" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
		Recomended Programs
</button>

<ul class =" dropdown-menu text-center btn-sm bg-dark" aria-labelledby="dropdownMenu2">

	<li><button id= "pplR" class="dropdown-item text-uppercase" type="submit"style="color:white">Push Pull Legs</button></li>


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
	<div class="  d-flex justify-content-between m-3 "  role="group">

	<input  class = "btn btn-primary btn-lg border border-dark mx-3 " type="submit" name="monday" value="Monday"></input>

	<input  class = "btn btn-primary btn-lg border border-dark  mx-3" type="submit" name="tuesday" value="Tuesday"> </input>

	<input  class = "btn btn-primary btn-lg border border-dark mx-3 " type="submit" name="wednesday" value="Wednesday"> </input>

	<input  class = "btn btn-primary btn-lg border border-dark mx-3 " type="submit" name="thursday" value="Thursday"> </input>

	<input  class = "btn btn-primary btn-lg border border-dark  mx-3 " type="submit" name="friday" value="Friday"> </input>

	<input  class = "btn btn-primary btn-lg border border-dark mx-3 " type="submit" name="saturday" value="Saturday"> </input>

	<input  class = "btn btn-primary btn-lg border border-dark mx-3" type="submit" name="sunday" value="Sunday"> </input>
	</div>
</form>


<span id="pplWorkout" style="display:none" > Push Pull Legs Program 
Workout 1 – Push
Bench Press 3 X 5 – 7
Seated Dumbbell Shoulder Press 3 X 6 – 8
Incline Dumbbell Press 3 X 8 – 10
Side Lateral Raises 2 X 10 – 12
Triceps Pressdowns 2 X 8 – 10
Overhead Triceps Extension 2 X 8 – 10

Workout 2 – Pull
Bent-over Row 3 X 5 – 7
Pull Ups 3 X 6 – 8
Barbell Shrugs 3 X 8 – 10
Face Pulls 2 X 10 – 12
Barbell Curl 2 X 8 – 10
Dumbbell Hammer Curl 2 X 8 – 10

Workout 3 – Legs/Abs
Squats 3 X 6 – 8
Romanian Deadlifts 2 X 8 – 10
Leg Press 2 X 10 – 12
Leg Curl 2 X 10 – 12
Calf Raise 4 X 8 – 10
Hanging Leg Raise 2 X 10 – 15

The sets listed are your work sets. Always warm up properly first in order to prepare your body for the heavier work, and to help prevent injury. However another advantage of this split routine is that fewer warm-up sets are required as training each exercise/body part warms you up for the next. 
</span>
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






<?php
if(isset($ppl)) {
	?>
	<div class="d-flex justify-content-end" style="display:none">
	<button id="addE" name="addExc" type ="button" class ="btn btn-outline-dark mb-3 btn-sm" >+</button>
	</div>
	<?php
}
?>


<script>


const addButton = document.getElementById('addE');
let numOfAdds = 0;

addButton.addEventListener('click', function() {
  const addDiv = document.createElement('div');
  addDiv.id = 'addE' + numOfAdds++;
  addDiv.style.display = 'block';
  addDiv.innerHTML = `
    <div class = "input-group mb-3"> 
		<select class="form-select" id="inputGroupSelect1">
			<option selected>Choose... </option>
			<option value ="1"> Bench Press</option>
			<option value="2"> Overhead Press</option>
			<option value="3">Dumbell Chest Press </option>
	</select>
    </div>
  `;

  document.body.appendChild(addDiv);
});





        </script>
		
</body>

</html>