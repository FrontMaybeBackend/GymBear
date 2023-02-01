<?php
include("database/connect.php");
include("navbar.php");

session_start();


$id = isset($_GET['id']) ? $_GET['id'] : 0;
$dataBase = new connect();
$conn = $dataBase ->getConnection();
$stmt = $conn->prepare("SELECT * FROM diets where id = :id");
$stmt->bindParam(':id', $id);
$stmt->execute();
while ($result = $stmt->fetch()) {
  ?>
    <p class="text-center"> <?php echo $result['title'] ?></p>
    <?php
    ?> <img class="img-fluid rounded mx-auto d-block" src="./images/<?php echo $result['img'] ?>" width="50%" height="50%" alt="Card image cap" />
    <?php
    echo $result['diet'];



}

?>


<!DOCTYPE html>
<html lang=" en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>



</html>