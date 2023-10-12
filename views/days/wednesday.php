<?php

include("../public/navbaro.php");

include("../../database/DisplayUserProgram.php");

$displayWednesday = new DisplayUserProgram();

$disWednesday = $displayWednesday->displayWednesdayProgram();
?>


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../css/myStyles/Exercises.css">
    <title>Document</title>
    <meta name=”viewport” content="width=device-width, initial-scale=1.0">

</head>

<body>



<p class="text-uppercase d-flex justify-content-center" style="color:white">  Wednesday Training:</p>

<div class="table-container">
<?php foreach($disWednesday as $wednesdayPrograms): ?>
    <table class="table table-dark table-bordered  table-responsive " ">
    <thead >
    <tr >
        <th scope="col" class="text-center" style="width: 20%">Name</th>
        <th scope="col" class="text-center"style="width: 20%">Name Exercise</th>
        <th  scope="col"class="text-center" style="width: 20%">Series</th>
        <th  scope="col" class="text-center" style="width: 20%">Reps</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td  class="text-center" ><?php echo $wednesdayPrograms->nameTrain; ?></td>
        <td class="text-center"><?php
            $excNameArray = explode(',', $wednesdayPrograms->excName);
            foreach ($excNameArray as $excValue){
                echo $excValue . '<br/>';
            }?></td>
        <td class="text-center"><?php
            $seriesArray = explode(",", $wednesdayPrograms->excSeries);
            foreach($seriesArray as $seriesValue){
                echo $seriesValue . '<br/>';
            }?>
        <td class="text-center">
            <?php
            $repsArray = explode(',', $wednesdayPrograms->excReps);
            foreach ($repsArray as $repsValue) {
                echo $repsValue . '<br/>';
            }
            ?>
        </td>

    </tr>
    </tbody>
    </table>
<?php endforeach; ?>
</div>



</body>
<?php include("footer.php");?>