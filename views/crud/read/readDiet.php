<?php

include("../../../database/Connect.php");
include("../../public/navbaro.php");





$id = isset($_GET['id']) ? $_GET['id'] : 0;
$database = new connect();
$conn = $database ->getConnection();
$stmt = $conn->prepare("SELECT * FROM diets where id = :id");
$stmt->bindParam(':id', $id);
$stmt->execute();
while ($result = $stmt->fetch()) {
    ?>
    <?php
    ?> <img class="img-fluid rounded mx-auto d-block h-100 w-75" src="./images/<?php echo $result['img'] ?>" alt="Card image cap" />
    <?php
    ?>
    <p class="text-lg-center p-2 m-3 " style="font-family: 'PT Serif', serif;color:white" ><?php echo nl2br($result['diet']); ?></p>
    <?php


}

?>
<?php include("footer.php");?>
