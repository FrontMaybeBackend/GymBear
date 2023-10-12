<?php

include_once("navbaro.php");


include_once("database/DeleteProgramConfig.php");


$delete = new DeleteProgramConfig();
$delete_diet  =$delete->deleteDiet();





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
<?php include("footer.php"); ?>
</body>

</html>


