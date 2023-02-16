<?php
include_once("navbar.php");
include_once("DropList.php");
include_once("database/connect.php");

$training_id = isset($_GET['id']) ? $_GET['id'] : 0;

// Pobierz dane treningu z bazy danych
$dataBase = new connect();
$conn = $dataBase ->getConnection();
$stmt = $conn->prepare("SELECT * FROM recomennded WHERE id = :id");
$stmt->bindParam(':id', $training_id);
$stmt->execute();
$training = $stmt->fetch();

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $title = $_POST['title'];
    $programs = $_POST['programs'];

    $stmt = $conn->prepare("UPDATE recomennded SET title = :title, programms = :programs WHERE id = :id");
    $stmt->bindParam(':title', $title);
    $stmt->bindParam(':programs', $programs);
    $stmt->bindParam(':id', $training_id);
    $stmt->execute();
    exit();
}

?>

<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="navbar.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
<div class="form-outline">
    <form method="POST">
    <label class="form-label p-3" for="textAreaExample1"><strong>Title</strong></label>
    <textarea class="form-control" id="textAreaExample1" rows="5" name="title"><?php echo $training['title'] ?></textarea>
    <label class="form-label p-3 " for="textAreaExample2"><strong>Content:</strong></label>
    <textarea class="form-control p-4 w-100" id="textAreaExample2" rows="15" name="programs"><?php echo $training['programms'] ?></textarea>
        <button class="p-2  m-3 align-content-end d-flex" type="submit">Accept Changes</button>
    </form>
</div>
</body>
</html>
