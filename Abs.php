<?php


use classes\Exercises;
use classes\UserProgramControl;

include("navbaro.php");
include("classes/Exercises.php");
include("classes/UserProgramControl.php");




$type = $_GET['type'];
$exercised = new Exercises($type);
$data = $exercised->getAbs($type);

if(isset($_POST['Compose'])){

    $name  = $_POST['nameTrain'];
    $programUser = '';
    $repUser = '';
    $nameExc = '';
    $dayTrain = $_POST['day'];
    if(isset($_POST['exercise'])) {
        foreach ($_POST['exercise'] as $exerciseName) {
            $programUser .= $_POST['exercise_series'][$exerciseName] . ',';
            $repUser .= $_POST['exercise_rep'][$exerciseName] . ',';
            $nameExc .= $exerciseName . ',';
        }
    }
    $programUser = rtrim($programUser, ',');
    $repUser = rtrim($repUser, ',');
    $nameExc = rtrim($nameExc, ',');

    $program = new UserProgramControl("$name","$programUser", $repUser, $nameExc,$dayTrain);

    $validation = $program ->ValidationTraining();
    if($validation){
        echo '<div class="error">' . $validation . '</div>';
    }

}


?>


    <!DOCTYPE html>
    <html lang=" en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="Exercises.css">
        <title>Document</title>
    </head>
    <body>


<form method="POST" id="programUser" name="programUser">
    <div class="table-container">
    <table class="table">
        <thead>
        <tr>
            <label for="nameTrain" >Name Training:</label>
            <input type="text" id="nameTrain"  name="nameTrain">
            <th>Name</th>
            <th>Type</th>
            <th>Muscle</th>
            <th>Equipment</th>
            <th>Difficulty</th>
            <th>Series</th>
            <th>Repetition</th>
            <th>AddExercise</th>

        </tr>
        </thead>
        <tbody>
        <label for="days"></label>
        <select name="day" id="day">
            <option value="monday">Monday</option>
            <option value="tuesday">Tuesday</option>
            <option value="wednesday">Wednesday</option>
            <option value="thursday">Thursday</option>
            <option value="friday">Friday</option>
            <option value="saturday">Saturday</option>
            <option value="sunday">Sunday</option>
        </select>
        <?php foreach ($data as $exercise) { ?>
            <tr>
                <td><?php echo $exercise['name']; ?></td>
                <td><?php echo $exercise['type']; ?></td>
                <td><?php echo $exercise['muscle']; ?></td>
                <td><?php echo $exercise['equipment']; ?></td>
                <td><?php echo $exercise['difficulty']; ?></td>
                <td><label for="series"></label>
                    <select name="exercise_series[<?php echo $exercise['name']; ?>]" id="series">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select></td>
                <td><label for="rep"></label>
                    <select name="exercise_rep[<?php echo $exercise['name']; ?>]" id="rep">
                        <option value="3-5">3-5</option>
                        <option value="5-8">5-8</option>
                        <option value="8-12">8-12</option>
                        <option value="12-15">12-15</option>
                        <option value="15-25">15-25</option>
                    </select></td>
                <td>
                    <input type="checkbox"  name="exercise[]" value="<?php echo $exercise['name']; ?>">
                </td>
            </tr>
        <?php  } ?>
        </tbody>
    </table>
        <button class="p-2  m-3 align-content-end d-flex" type="submit" name="Compose" >Compose Workout</button>
    </div>
</form>
</Body>
</html>
<?php include("footer.php");?>