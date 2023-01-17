<?php

$host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "gymweb";




try {
  $conn = new PDO("mysql:host=$host;dbname=$db_name", $db_user, $db_password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "success";
} catch (PDOException $e) {
  echo "failed:" . $e->getMessage();
}
