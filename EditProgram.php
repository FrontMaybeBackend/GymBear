<?php
include_once("navbar.php");
include_once("DropList.php");
include_once("database/EditProgramConfig.php");
 $training = new EditProgramConfig();
$training_id  =$training->showProgramToEdit();






if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $title = $_POST['title'];
    $programs = $_POST['programs'];
    $img = $_POST['img'];

   $edit_Training = $training->editProgram($title, $programs,$img);
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
    <textarea class="form-control p-4" id="textAreaExample1" rows="5" name="title"><?php echo $training_id['title'] ?></textarea>
    <label class="form-label p-3 " for="textAreaExample2"><strong>Content:</strong></label>
    <textarea class="form-control p-4 w-100" id="textAreaExample2" rows="15" name="programs"><?php echo $training_id['programms'] ?></textarea>
        <label class="form-label p-3 " for="textAreaExample2"><strong>Image:</strong></label>
        <div class="mb-3" style="border:solid 2px black">
            <image class="h-25 w-25" src="images/<?php echo $training_id['img']?>"></image>
            <input class="form-control w-25" name="img" type="file" id="formFile">
        </div>
        <button class="p-2  m-3 align-content-end d-flex" type="submit">Accept Changes</button>
    </form>
</div>
</body>
</html>
