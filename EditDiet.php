<?php
include_once("navbar.php");
include_once("DropList.php");
include_once("database/EditProgramConfig.php");
$diet = new EditProgramConfig();
$diet_id  = $diet->showDietToEdit();






if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $title = $_POST['title'];
    $diet_text = $_POST['diet'];


    $edit_diet = $diet->editDiet($title, $diet_text);
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
    <form method="POST" >
        <label class="form-label p-3" for="textAreaExample1"><strong>Title</strong></label>
        <textarea class="form-control p-4" id="textAreaExample1" rows="5" name="title"><?php echo $diet_id['title'] ?></textarea>
        <label class="form-label p-3 " for="textAreaExample2"><strong>Content:</strong></label>
        <textarea class="form-control p-4 w-100" id="textAreaExample2" rows="15" name="diet"><?php echo $diet_id['diet'] ?></textarea>
        <button class="p-2  m-3 align-content-end d-flex" type="submit">Accept Changes</button>
    </form>
</div>
</body>
</html>
<?php include("footer.php");?>