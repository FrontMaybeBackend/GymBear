<?php

$host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "gymweb";
$linkDB= mysqli_connect($host, $db_user, $db_password, $db_name);

if(mysqli_connect_error()){
    die("There was an error while connecting to database");

}else {
  //  echo  " succesfully connected to database";
}
