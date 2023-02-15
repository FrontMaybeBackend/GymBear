<?php




include("navbar.php");
include("DropList.php");
include("classes/Exercises.php");
include("classes/UserProgramControl.php");




$type = $_GET['type'];
$exercise = new \classes\Exercises($type);
$data = $exercise->getChest($type);

if(isset($_POST['Compose'])){

$name  = $_POST['nameTrain'];
$programUser = $_POST['programUser'];


$program = new \classes\UserProgramControl("$name","$programUser");

$validation = $program ->ValidationTraining();
if($validation){
    echo '<div class="error">' . $validation . '</div>';
}

}



?>



<html>
<Body>

<form method="POST" id="programUser" name="programUser">
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
    <button type="submit" name="Compose">Compose Workout</button>
</form>
</Body>
</html>
