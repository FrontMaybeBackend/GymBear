<?php




include("navbar.php");
include("DropList.php");
include("database/DisplayRecomennded.php");
include("classes/Calculator.php");





if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$monday = $_POST["monday"];
	$ppl = $_POST["ppl"];
}


//WYKONUJE SIE TYLKO ELSE WIEC JEST COS NEI TAK, TRZEBA OGARNAC !



?>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<meta name=”viewport” content="width=device-width, initial-scale=1.0">

</head>

<body>


	<form id="days" method="POST" action="<?php $_SERVER["PHP_SELF"] ?>">
		<div class="  d-flex justify-content-between m-3 " role="group">

			<input class="btn  btn-lg border border-dark mx-3 " type="submit" name="monday" value="Monday"></input>

			<input class="btn  btn-lg border border-dark  mx-3" type="submit" name="tuesday" value="Tuesday"> </input>

			<input class="btn  btn-lg border border-dark mx-3 " type="submit" name="wednesday" value="Wednesday"> </input>

			<input class="btn  btn-lg border border-dark mx-3 " type="submit" name="thursday" value="Thursday"> </input>

			<input class="btn  btn-lg border border-dark  mx-3 " type="submit" name="friday" value="Friday"> </input>

			<input class="btn  btn-lg border border-dark mx-3 " type="submit" name="saturday" value="Saturday"> </input>

			<input class="btn  btn-lg border border-dark mx-3" type="submit" name="sunday" value="Sunday"> </input>
		</div>
	</form>





	<?php
	if (isset($monday)) {
	?>
		<div id="monday" class="d-flex m-4 p-2">
			<ul class="d-grid gap-2  list-group ">
				<form id="formMonday" action='' method='post'>
					<button name="ppl" type="submit" class="btn  text-uppercase text-center badge  text-wrap"> Push Pull Legs</button>
					<button name="ul" type="button" class="btn  text-uppercase text-center badge  text-wrap">Upper Lower</button>
					<button name="brs" type="button" class="btn  text-uppercase text-center badge  text-wrap">Bro Split</button>
					<button name="fbw" type="button" class="btn  text-uppercase text-center badge  text-wrap">Full body workout</button>
				</form>
			</ul>
		</div>
	<?php
	}
	?>


	<?php
	if (isset($_POST["ppl"])) {
	?>
		<label class="input-group-text justify-content-center" for="inputGroupSelect01">Push</label>
		<div class="input-group mb-3">
			<select class="form-select" id="inputGroupSelect1">
				<option selected>Choose... </option>
				<option value="1"> Bench Press</option>
				<option value="2"> Overhead Press</option>
				<option value="3">Dumbell Chest Press </option>
			</select>
		</div>

	<?php
	}
	?>

	<?php
	if (isset($ppl)) {
	?>
		<div class=" d-flex justify-content-end" style="display:none">
			<button id="addE" name="addExc" type="button" class="btn btn-outline-dark mb-3 btn-sm">+</button>
		</div>
	<?php

	}
	?>

    <?php


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

