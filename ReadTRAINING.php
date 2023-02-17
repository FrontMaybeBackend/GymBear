<?php
include("database/connect.php");
include("navbar.php");
include("DropList.php");




$id = isset($_GET['id']) ? $_GET['id'] : 0;
$dataBase = new connect();
$conn = $dataBase ->getConnection();
$stmt = $conn->prepare("SELECT * FROM recomennded where id = :id");
$stmt->bindParam(':id', $id);
$stmt->execute();
while ($result = $stmt->fetch()) {
    ?>
    <?php
    ?> <img class="img-fluid rounded mx-auto d-block h-100 w-75" src="./images/<?php echo $result['img'] ?>" alt="Card image cap" />
    <?php
    ?>
    <p class="text-lg-center p-2 m-3 " style="font-family: 'PT Serif', serif;" ><?php echo nl2br($result['programms']); ?></p>
    <?php


}

?>
<?php include("footer.php");?>