<?php

include("navbaro.php");

include("database/DisplayRecomennded.php");
include("classes/Calculator.php");


if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$monday = $_POST["monday"];
}

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

    <div class="btn-group-vertical p-2" role="group" aria-label="Basic example" >
        <button type="button"  class="btn btn-dark "> <a class="text-decoration-none text-light" href="views/days/Monday.php" >Monday</a></button>
        <button type="button" class="btn btn-dark "> <a class="text-decoration-none text-light" href="views/days/Tuesday.php" >Tuesday</a></button>
        <button type="button" class="btn btn-dark "> <a  class="text-decoration-none text-light"href="views/days/Wednesday.php" >Wednesday</a></button>
        <button type="button" class="btn btn-dark "> <a class="text-decoration-none text-light" href="views/days/Thursday.php" >Thursday</a></button>
        <button type="button" class="btn btn-dark "> <a class="text-decoration-none text-light" href="views/days/Friday.php" >Friday</a></button>
        <button type="button" class="btn btn-dark "> <a class="text-decoration-none text-light" href="views/days/Saturday.php" >Saturday</a></button>
        <button type="button" class="btn btn-dark "><a class="text-decoration-none text-light" href="views/days/Sunday.php" >Sunday</a></button>
    </div>
<?php include_once("footer.php")?>
</body>

</html>

