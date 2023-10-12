<?php

include("../public/navbaro.php");





if(isset($_POST['Calculate'])){

    include("classes/Calculator.php");
    $weight = $_POST['Weight'];
    $reps = $_POST['Reps'];
    $OneRepMax = new \classes\Calculator("$weight", "$reps");
    $Calculate = $OneRepMax ->calcBMI();
    ?>
    <?php


}

?>

    <!DOCTYPE html>
    <html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="../../css/myStyles/mainStyle.css">
    <meta name=”viewport” content="width=device-width, initial-scale=1.0">
    <style>
        .form-label{
            color: white;
        }
        .table{
             color:white;


         }

    </style>

</head>

<form id = "4" method="POST" >
    <div class="mb-3" >
        <label for="Weight" class="form-label" > Weight</label >
        <input type = "text" class="form-control" name="Weight" id = "Weight" >
    </div >
    <div class="mb-3" >
        <label for="Reps" class="form-label" > Growth</label >
        <input type = "text" class="form-control" name="Reps" id = "Reps" >
    </div >
    <button class="p-2  m-3 align-content-end d-flex" id="Calculate" type="submit" name="Calculate">Calculate</button>
    <label for="Score" class="form-label center" > Your BMI: <?php if(isset($Calculate)){
        echo $Calculate;

           ?> <table class="table ">
                <thead>
                <tr>
                    <th scope="col">BMI</th>
                    <th scope="col">What does it mean?</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><16,0</td>
                    <td>wygłodzenie</td>
                </tr>
                <tr>

                    <td>16,0 – 16,9</td>
                    <td>wychudzenie</td>
                </tr>
                <tr>
                    <td>17,0 - 18,5</td>
                    <td>niedowaga</td>
                </tr>
                <tr>
                    <td>18,5–24,9</td>
                    <td>waga prawidłowa</td>
                </tr>
                <tr>
                    <td>25,0–29,9</td>
                    <td>nadwaga</td>
                </tr>
                <tr>
                    <td>30,0–34,9</td>
                    <td>otyłość I stopnia</td>
                </tr>
                <tr>
                    <td>35 - 39,9</td>
                    <td>otyłość II stopnia</td>
                </tr>
                <tr>
                    <td>≥40</td>
                    <td>otyłość III stopnia</td>
                </tr>
                </tbody>
            </table> <?php

    } ?>
    </label>



</form >
<?php include("footer.php");?>