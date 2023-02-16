<?php
include("database/connect.php");
include("navbar.php");
include("DropList.php");




$id = isset($_GET['id']) ? $_GET['id'] : 0;
$dataBase = new connect();
$conn = $dataBase ->getConnection();
$stmt = $conn->prepare("SELECT * FROM diets where id = :id");
$stmt->bindParam(':id', $id);
$stmt->execute();
while ($result = $stmt->fetch()) {
  ?>
    <br> <p style="font-family: 'PT Serif', serif;" class="text-center"> <?php echo $result['title'] ?></p> </br>
    <?php
    ?> <img class="img-fluid rounded mx-auto d-block h-100 w-75" src="./images/<?php echo $result['img'] ?>" alt="Card image cap" />
<?php
?>
    <p class="text-start p-2 m-3 " style="font-family: 'PT Serif', serif;" ><?php echo nl2br($result['diet']); ?></p>
<?php


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