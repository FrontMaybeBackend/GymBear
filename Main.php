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
   <form method="POST" action="<?php $_SERVER["PHP_SELF"]?>";>
	<li><input  class="dropdown-item text-uppercase" type="submit" name="pplR" style="color:white" value="Push Pull Legs" ></input></li>
</form>

<form method="POST" action="<?php $_SERVER["PHP_SELF"]?>";>
	<li><input class="dropdown-item text-uppercase" type="submit" name="upl" style="color:white" value="Upper Lower" ></input></li>
	</form>

	<form method="POST" action="<?php $_SERVER["PHP_SELF"]?>";>
	<li><input class="dropdown-item text-uppercase" type="submit" name ="fbw" style="color:white" value="Full Body Workout"></input></li>
	</form>

	<form method="POST" action="<?php $_SERVER["PHP_SELF"]?>";>
	<li><input class="dropdown-item text-uppercase" type="submit" name="split" style="color:white" value="Bro Split"></input></li>
</ul>


 <button class ="btn btn-info dropdown-toggle-split m-3 text-center text-nowrap" style="width: 10rem;" type="button" id="dropdownMenu3" data-bs-toggle="dropdown" aria-expanded="false">
 Diet
</button>
<ul class="dropdown-menu text-center btn-sm bg-dark " aria-labelledby="dropdownMenu3">

<form method="POST" action="<?php $_SERVER["PHP_SELF"]?>";>
	<li><input class="dropdown-item text-uppercase" type="submit" name="Carb" style="color:white" value=" Carbs"> </input></li>
</form>

<form method="POST" action="<?php $_SERVER["PHP_SELF"]?>";>
	<li><input class= "dropdown-item text-uppercase" name ="Fats" type="submit" style="color:white" value=" Fats"> </input></li>
	</form>
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
	if(isset($_POST["ppl"])) {
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
<section id ="Recomennded"> 
<?php if(isset($_POST["pplR"])) {
	?>
	<p class=" text-center" id="pplWorkout" > <b>Push Pull Legs Program </b> :</p>

	<img class ="img-fluid rounded mx-auto d-block"src="images/PUSHPULLLEGS.png" alt="push pull legs img";> </img>


<p class="text-center text-wrap p-3"> <b>What is 'Push, Pull, Legs'? It's a full-body training split that's designed to build muscle in almost every single muscle group by following a simple format: on a certain day of the week, you only train either upper-body pushing muscles (push), upper-body pulling muscles (pull), or your entire lower-body (legs).</b></p>

<ul class="text-center" style="list-style:none">
<li><b> Workout 1 - Push </b> </li>
	<li>Bench Press 3 X 5 - 7 </li>
	<li>Seated Dumbbell Shoulder Press 3 X 6 - 8</li>
	<li>Incline Dumbbell Press 3 X 8 - 10</li>
	<li>Side Lateral Raises 2 X 10 - 12</li>
	<li>Triceps Pressdowns 2 X 8 - 10</li>
	<li>Overhead Triceps Extension 2 X 8 - 10</li>
</ul>
</p>
<p>
	<ul  class ="text-center" style="list-style:none">
<li><b> Workout 2 - Pull</b></li>
<li>Bent-over Row 3 X 5 - 7</li>
<li>Pull Ups 3 X 6 - 8</li>
<li>Barbell Shrugs 3 X 8 - 10</li>
<li>Face Pulls 2 X 10 - 12</li>
<li>Barbell Curl 2 X 8 - 10</li>
<li>Dumbbell Hammer Curl 2 X 8 - 10</li>
</p>
<p>
<ul  class ="text-center"  style="list-style:none">
<li><b> Workout 3 - Legs/Abs</b></li>
<li>Squats 3 X 6 - 8</li>
<li>Romanian Deadlifts 2 X 8 - 10</li>
<li>Leg Press 2 X 10 - 12</li>
<li>Leg Curl 2 X 10 - 12</li>
<li>Calf Raise 4 X 8 - 10</li>
<li>Hanging Leg Raise 2 X 10 - 15</li>

<p class="p-3">
<b>The sets listed are your work sets. Always warm up properly first in order to prepare your body for the heavier work, and to help prevent injury. However another advantage of this split routine is that fewer warm-up sets are required as training each exercise/body part warms you up for the next.</b>

</p>
</p>
</p>
<?php
}
?>

<?php if(isset($_POST["upl"])) {
	?>
	<p class=" text-center" id="pplWorkout" > <b>Upper Lower </b> :</p>

	<img class ="img-fluid rounded mx-auto d-block"src="images/upperLower.jpg" alt="upper lower img";> </img>


<p class="text-center text-wrap p-3"> <b>An upper/lower split program is a way of organizing your training into upper and lower body workouts, performed on separate days. On the upper-body days, you work muscles such as your chest, back, shoulders, biceps, and triceps. On the lower days, you work muscles such as your quads, glutes, hamstrings, and calves.</b></p>

<ul class="text-center" style="list-style:none">
<li><b> Workout 1 - Upper </b> </li>
	<li>Bench Press 3 X 5 - 7 </li>
	<li>Barbell Bent Over Rows 3 X 6 - 8</li>
	<li>Seated Dumbbell Shoulder Press 3 X 8 - 10</li>
	<li>Lat Pulldowns 2 X 10 - 12</li>
	<li>Low Cable Chest Flyes 2 X 8 - 10</li>
	<li>Dumbbell Curl 2 X 12-15</li>
	<li>Overhead Dumbbell Tricep Extensions 2 X 12 - 15</li>
	<li>Rope Cable Face Pulls 2 X 15 - 25</li>
</ul>
</p>
<p>
	<ul  class ="text-center" style="list-style:none">
<li><b> Workout 2 - Lower</b></li>
<li>Back Squats 3 X 6 - 10</li>
<li>Glute Ham Raises 3 X 8 - 12</li>
<li>Alternating Forward Lunges 3 X 10 - 15</li>
<li>Lying Hamstring Curls 2 X 12 - 15</li>
<li>Standing Smith Machine Calf Raises 3 X 8 - 12</li>
</p>
</ul>

<p>
<ul  class ="text-center"  style="list-style:none">
<li><b> Workout 3 - Upper </b></li>
<li>Pull Ups 3 X 5 - 10 </li>
<li>Incline Dumbbell Bench Press 3 x 8 - 10</li>
<li>Standing Barbell Push Press 3 X 8 - 12</li>
<li>Cable Lat Pullovers 3 X 10 - 15</li>
<li>Push-Ups 2 X 10 - 20</li>
<li>EZ-bar Bicep Curl 3 X 10 - 15</li>
<li>Dumbbell Tricep Kickbacks 3 X 12 - 15</li>
</ul>

<ul  class ="text-center" style="list-style:none">
<li><b> Workout 4 - Lower</b></li>
<li>Leg Press 3 X 8 - 12</li>
<li>Romanian Deadlift 3 X 8 - 10 </li>
<li>Unilateral Dumbbell Shrug 3 X 8 - 15</li>
<li>Leg Extensions 3 X 12 - 15</li>
<li>Seated Machine Calf Raises 4 X 12 - 20</li>
<li>Hanging Leg Raises 4 X 10 - 20</li>
</p>
</ul>

<p class="p-3 text-center">
<b>The sets listed are your work sets. Always warm up properly first in order to prepare your body for the heavier work, and to help prevent injury. However another advantage of this split routine is that fewer warm-up sets are required as training each exercise/body part warms you up for the next.</b>

</p>
</p>
</p>
<?php
}
?>

<?php if(isset($_POST["fbw"])) {
	?>
	<p class=" text-center" id="pplWorkout" > <b>Full Body Workout</b> :</p>

	<img class ="img-fluid rounded mx-auto d-block"src="images/fullbodyworkout.jpg" alt="full body workout img";> </img>


<p class="text-center text-wrap p-3"> <b>If you want to learn an effective full body workout routine optimized for muscle growth, then you need to read this article.
Full body workouts are one of the best workout splits for muscle growth and strength regardless of your training experience. They not only enable you to optimize your training frequency and recovery throughout the week but are also time efficient - and in this case requiring only 3 workouts per week.</b></p>

<ul class="text-center" style="list-style:none">
<li><b> Workout 1 </b> </li>
	<li>Bench Press 3 X 5 - 7 </li>
	<li>Barbell Back Squat 3 X 6 - 8</li>
	<li>Pull Ups 3 X 8 - 10</li>
	<li>Lying Hamstring Dumbbell Curls 3 X 10 - 12</li>
	<li>Standing Overhead Press  3 X 6 - 10</li>
	<li>Face Pulls 3 X 12-15</li>
	<li>Drag Curls 3 X 12 - 15</li>
	
</ul>
</p>
<p>
	<ul  class ="text-center" style="list-style:none">
<li><b> Workout 2 </b></li>
<li>Barbell Deadlift 3 X 6 - 10</li>
<li>Incline Dumbbel Press 3 X 6 - 12</li>
<li>Bulgarian Split Squat 3 X 10 - 15</li>
<li>Chest Supported Row 3 X 12 - 15</li>
<li>Dumbbell Lateral Raises 3 X 8 - 12</li>
<li>Incline Dumbbell Kickbacks 3 X 8 - 12</li>
<li>High To Low Chest Cable Flies 3 X 10 - 12</li>
</p>
</ul>

<p class="p-3 text-center">
<b>The sets listed are your work sets. Always warm up properly first in order to prepare your body for the heavier work, and to help prevent injury. However another advantage of this split routine is that fewer warm-up sets are required as training each exercise/body part warms you up for the next.</b>

</p>
</p>
</p>
<?php
}
?>

<?php if(isset($_POST["split"])) {
	?>
	<p class=" text-center" id="pplWorkout" > <b>Bro Split</b> :</p>

	<img class ="img-fluid rounded mx-auto d-block"src="images/brosplit.jpg" alt="full body workout img";> </img>


<p class="text-center text-wrap p-3"> <b>A workout split is how you divide up your workouts throughout the week either by body region, movement, specific body part, or by lift. This divide-and-conquer approach to exercise allows bodybuilders and general gym-goers to focus their efforts in a way that optimizes results.</b></p>

<ul class="text-center" style="list-style:none">
<li><b> Workout 1 - Chest </b> </li>
	<li>Bench Press 3 X 5 - 7 </li>
	<li>Dumbbell Chest Press 3 X 6 - 8</li>
	<li>Dumbbell Flye 3 X 8 - 10</li>
	<li>Dips 3 X 10 - 12</li>
	<li>Triceps Extensions  3 X 6 - 10</li> 

</ul>
</p>
<p>
	<ul  class ="text-center" style="list-style:none">
<li><b> Workout 2 - Back  </b></li>
<li>Barbell Deadlift 3 X 6 - 10</li>
<li>Pull Ups 3 X 6 - 12</li>
<li>Bulgarian Split Squat 3 X 10 - 15</li>
<li>Chest Supported Row 3 X 12 - 15</li>
<li>Dumbbell Lateral Raises 3 X 8 - 12</li>
<li>Incline Dumbbell Kickbacks 3 X 8 - 12</li>
<li>High To Low Chest Cable Flies 3 X 10 - 12</li>
</p>
</ul>

<ul  class ="text-center" style="list-style:none">
<li><b> Workout 2 - Legs</b></li>
<li>Back Squats 3 X 6 - 10</li>
<li>Glute Ham Raises 3 X 8 - 12</li>
<li>Alternating Forward Lunges 3 X 10 - 15</li>
<li>Lying Hamstring Curls 2 X 12 - 15</li>
<li>Standing Smith Machine Calf Raises 3 X 8 - 12</li>
</p>
</ul>

<p class="p-3 text-center">
<b>The sets listed are your work sets. Always warm up properly first in order to prepare your body for the heavier work, and to help prevent injury. However another advantage of this split routine is that fewer warm-up sets are required as training each exercise/body part warms you up for the next.</b>

</p>
</p>
</p>
<?php
}
?>




</section>

<section>
<?php if(isset($_POST["Carb"])) {
	?>
	<p class=" text-center" id="pplWorkout" > <b>Diet High Carb</b> :</p>

	<img class ="img-fluid rounded mx-auto d-block"src="images/highcarb.jpg" alt="carbs img"; style="width:50rem"> </img>


<p class="text-center text-wrap p-3"> <b> What is a high carb diet?</b></p>
<p class="text-center text-wrap p-3"> <b> Dieta wysokowęglowodanowa jest schematem żywieniowym, który opiera się na produktach o wysokiej zawartości węglowodanów, a w mniejszej ilości na produktach białkowych i tłuszczach. </p>





<?php
}
?>
</section>


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