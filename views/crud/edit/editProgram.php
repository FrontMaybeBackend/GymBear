<?php
include_once("navbaro.php");
include_once("database/EditProgramConfig.php");
 $training = new EditProgramConfig();
$training_id  =$training->showProgramToEdit();






if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $title = $_POST['title'];
    $programs = $_POST['programs'];

   $edit_Training = $training->editProgram($title, $programs);
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
    <style>
        label{
            color:white;
        }
    </style>
</head>
<body>
<div class="form-outline">
    <form method="POST">
    <label class="form-label p-3" for="textAreaExample1"><strong>Title:</strong></label>
    <textarea class="form-control p-4" id="textAreaExample1" rows="5" name="title"><?php echo $training_id['title'] ?></textarea>
    <label class="form-label p-3 " for="textAreaExample2"><strong>Content:</strong></label>
    <textarea class="form-control p-4 w-100" id="textAreaExample2" rows="15" name="programs"><?php echo $training_id['programms'] ?></textarea>
        <button class="p-2  m-3 align-content-end d-flex" type="submit">Accept Changes</button>
    </form>
</div>
</body>
</html>
<?php include("footer.php");?>