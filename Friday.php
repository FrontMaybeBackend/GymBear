<?php

include("navbaro.php");

include("database/DisplayUserProgram.php");

$displayFriday = new DisplayUserProgram();

$disFriday = $displayFriday->displayFridayProgram();
?>


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="Exercises.css">
    <title>Document</title>
    <meta name=”viewport” content="width=device-width, initial-scale=1.0">

</head>

<body>



<p class="text-uppercase d-flex justify-content-center" style="color:white"> Tuesday Training:</p>

<div class="table-container d-flex flex-row flex-wrap justify-content-between"">
<?php foreach($disFriday as $fridayPrograms): ?>
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
        <td  class="text-center" ><?php echo $fridayPrograms->nameTrain; ?></td>
        <td class="text-center"><?php
            $excNameArray = explode(',', $fridayPrograms->excName);
            foreach ($excNameArray as $excValue){
                echo $excValue . '<br/>';
            }?></td>
        <td class="text-center"><?php
            $seriesArray = explode(",", $fridayPrograms->excSeries);
            foreach($seriesArray as $seriesValue){
                echo $seriesValue . '<br/>';
            }?>
        <td class="text-center">
            <?php
            $repsArray = explode(',', $fridayPrograms->excReps);
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