<?php
include("navbar.php");
include("DropList.php");
include("classes/Exercises.php");

$type = $_GET['type'];
$exercise = new \classes\Exercises($type);
$data = $exercise->getBiceps($type);

?>