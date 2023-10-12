<?php
include("../../public/navbaro.php");

include_once("../../../database/EditProgramConfig.php");

$supp = new EditProgramConfig();
$supp_id  = $supp->showSuppToEdit();






if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $title = $_POST['title'];
    $supp_text = $_POST['supp'];


    $edit_supp = $supp->editSupp($title, $supp_text);
}


?>

<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="../../../css/myStyles/navbar.css">
    <link rel="stylesheet" type="text/css" href="../../../css/bootstrap.min.css">
    <style>
        label{
            color:white;
        }
    </style>
</head>
<body>
<div class="form-outline">
    <form method="POST" >
        <label class="form-label p-3" for="textAreaExample1"><strong>Title:</strong></label>
        <textarea class="form-control p-4" id="textAreaExample1" rows="5" name="title"><?php echo $supp_id['title'] ?></textarea>
        <label class="form-label p-3 " for="textAreaExample2"><strong>Content:</strong></label>
        <textarea class="form-control p-4 w-100" id="textAreaExample2" rows="15" name="supp"><?php echo $supp_id['body'] ?></textarea>
        <button class="p-2  m-3 align-content-end d-flex" type="submit">Accept Changes</button>
    </form>
</div>
</body>
</html>
<?php include("footer.php");?>
