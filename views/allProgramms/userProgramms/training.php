<?php
include("navbaro.php");
include("database/DisplayUserProgram.php");

 $displayProgram = new DisplayUserProgram();

 $dis = $displayProgram->displayProgram();

?>


<!DOCTYPE html>
<html lang=" en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../../css/myStyles/Exercises.css">
    <title>Document</title>
    <style>
     p{
         color:white;
     }
    </style>
</head>
<body>

<p class="text-uppercase d-flex justify-content-center "> My Programs:</p>

<div class="table-container "">
    <?php foreach($dis as $userprograms): ?>
        <table class="table table-dark table-bordered " ">
            <thead >
            <tr >
                <th scope="col" class="text-center" style="width: 20%">Name</th>
                <th scope="col" class="text-center"style="width: 20%">Name Exercise</th>
                <th  scope="col"class="text-center" style="width: 20%">Series</th>
                <th  scope="col" class="text-center" style="width: 20%">Reps</th>
                <th scope ="col" class="text-center" style="width: 20%">Days</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td  class="text-center" ><?php echo $userprograms->nameTrain; ?></td>
                <td class="text-center"><?php
                    $excNameArray = explode(',', $userprograms->excName);
                    foreach ($excNameArray as $excValue){
                        echo $excValue . '<br/>';
                    }?></td>
                <td class="text-center"><?php
                    $seriesArray = explode(",", $userprograms->excSeries);
                    foreach($seriesArray as $seriesValue){
                        echo $seriesValue . '<br/>';
                    }?>
                <td class="text-center">
                <?php
                $repsArray = explode(',', $userprograms->excReps);
                foreach ($repsArray as $repsValue) {
                    echo $repsValue . '<br/>';
                }
                ?>
                </td>
                <td class="text-center" >
                    <?php
                    $daysArray = explode(',', $userprograms->dayTrain);
                    foreach ($daysArray as $daysValue){
                        echo $daysValue . '<br/>';
                    }
                    ;?></td>
            </tr>
            </tbody>
        </table>
    <?php endforeach; ?>
</div>
</body>

</html>
<?php include("footer.php");?>