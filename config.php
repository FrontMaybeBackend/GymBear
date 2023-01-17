<?php

$host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "gymweb";
$linkDB = mysqli_connect($host, $db_user, $db_password, $db_name);



try {
  $linkDB = new PDO("mysql:host=$host;dbname=$db_name", $db_user, $db_password);
  $linkDB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "success";
} catch (PDOException $e) {
  echo "failed:" . $e->getMessage();
}
