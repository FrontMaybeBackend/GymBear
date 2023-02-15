<?php

namespace classes;
use connect;

include("database/connect.php");

class Exercises extends connect
{
public $exercises;
    public function getChest($type)
    {
        $muscle = 'chest';
        $api_url = 'https://api.api-ninjas.com/v1/exercises?muscle=' . $muscle;
        $headers = array(
            'X-Api-Key: hQlFG98mJuyD5UarHs5x3Q==A4N4Elms1buJIkKM'
        );

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $api_url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        $status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        if ($status_code == 200) {
            $exercises = json_decode($response, true);
            return $exercises;
        } else {
            return array();
        }
    }


   /* <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {



            $connect = new connect();

            $conn = $connect->getConnection();
            if(empty($nameTrain)){
                echo "name is required";
            }
            foreach ($exercises as $exercise) {
                if (isset($_POST['exercise']) && in_array($exercise['name'], $_POST['exercise'])) {
                    $nameTrain = $_POST['nameTrain'];
                    $exercise_series = $_POST['exercise_series'][$exercise['name']];
                    $exercise_rep = $_POST['exercise_rep'][$exercise['name']];
                    $stmt = $conn->prepare("INSERT INTO users_plans (username, exc_name, exc_series, exc_reps, name_train) VALUES (?,?,?,?,?)");
                    $stmt->bindParam(1, $_SESSION['username']);
                    $stmt->bindParam(2, $exercise['name']);
                    $stmt->bindParam(3, $exercise_series);
                    $stmt->bindParam(4, $exercise_rep);
                    $stmt->bindParam(5, $nameTrain);
                    $stmt->execute();
                    //komunikat po zakończeniu dodawania ćwiczeń
                    echo "Exercise added successfully!";
                }
            }

        }
    }
    }
*/



    public function getBack($type){

        $muscle = 'middle_back';
        $api_url = 'https://api.api-ninjas.com/v1/exercises?muscle=' . $muscle;
        $headers = array(
            'X-Api-Key: hQlFG98mJuyD5UarHs5x3Q==A4N4Elms1buJIkKM'
        );

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $api_url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        $status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        if ($status_code == 200) {
            $exercises = json_decode($response, true);

            ?>
            <table class="table">
            <thead>
            <tr>
                <th>Name</th>
                <th>Type</th>
                <th>Muscle</th>
                <th>Equipment</th>
                <th>Difficulty</th>
                <th>AddExercise</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($exercises as $exercise) { ?>
                <tr>
                    <td><?php echo $exercise['name']; ?></td>
                    <td><?php echo $exercise['type']; ?></td>
                    <td><?php echo $exercise['muscle']; ?></td>
                    <td><?php echo $exercise['equipment']; ?></td>
                    <td><?php echo $exercise['difficulty']; ?></td>
                    <td><input type="checkbox"></td>

                </tr>
            <?php }}?>
        </tbody>
        </table>
        <?php
    }


    public function getLegs($type){

        $muscle = 'quadriceps';
        $api_url = 'https://api.api-ninjas.com/v1/exercises?muscle=' . $muscle;
        $headers = array(
            'X-Api-Key: hQlFG98mJuyD5UarHs5x3Q==A4N4Elms1buJIkKM'
        );

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $api_url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        $status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        if ($status_code == 200) {
            $exercises = json_decode($response, true);

            ?>
            <table class="table">
            <thead>
            <tr>
                <th>Name</th>
                <th>Type</th>
                <th>Muscle</th>
                <th>Equipment</th>
                <th>Difficulty</th>
                <th>AddExercise</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($exercises as $exercise) { ?>
                <tr>
                    <td><?php echo $exercise['name']; ?></td>
                    <td><?php echo $exercise['type']; ?></td>
                    <td><?php echo $exercise['muscle']; ?></td>
                    <td><?php echo $exercise['equipment']; ?></td>
                    <td><?php echo $exercise['difficulty']; ?></td>
                    <td><input type="checkbox"></td>

                </tr>
            <?php }}?>
        </tbody>
        </table>
        <?php
    }

    public function getAbs($type){

        $muscle = 'abdominals';
        $api_url = 'https://api.api-ninjas.com/v1/exercises?muscle=' . $muscle;
        $headers = array(
            'X-Api-Key: hQlFG98mJuyD5UarHs5x3Q==A4N4Elms1buJIkKM'
        );

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $api_url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        $status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        if ($status_code == 200) {
            $exercises = json_decode($response, true);

            ?>
            <table class="table">
            <thead>
            <tr>
                <th>Name</th>
                <th>Type</th>
                <th>Muscle</th>
                <th>Equipment</th>
                <th>Difficulty</th>
                <th>AddExercise</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($exercises as $exercise) { ?>
                <tr>
                    <td><?php echo $exercise['name']; ?></td>
                    <td><?php echo $exercise['type']; ?></td>
                    <td><?php echo $exercise['muscle']; ?></td>
                    <td><?php echo $exercise['equipment']; ?></td>
                    <td><?php echo $exercise['difficulty']; ?></td>
                    <td><input type="checkbox"></td>

                </tr>
            <?php }}?>
        </tbody>
        </table>
        <?php
    }

    public function getShoulders($type){

        $muscle = 'shoulders';
        $api_url = 'https://api.api-ninjas.com/v1/exercises?muscle=' . $muscle;
        $headers = array(
            'X-Api-Key: hQlFG98mJuyD5UarHs5x3Q==A4N4Elms1buJIkKM'
        );

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $api_url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        $status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        if ($status_code == 200) {
            $exercises = json_decode($response, true);

            ?>
            <table class="table">
            <thead>
            <tr>
                <th>Name</th>
                <th>Type</th>
                <th>Muscle</th>
                <th>Equipment</th>
                <th>Difficulty</th>
                <th>AddExercise</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($exercises as $exercise) { ?>
                <tr>
                    <td><?php echo $exercise['name']; ?></td>
                    <td><?php echo $exercise['type']; ?></td>
                    <td><?php echo $exercise['muscle']; ?></td>
                    <td><?php echo $exercise['equipment']; ?></td>
                    <td><?php echo $exercise['difficulty']; ?></td>
                    <td><input type="checkbox"></td>

                </tr>
            <?php }}?>
        </tbody>
        </table>
        <?php
    }

    public function getGlutes($type){

        $muscle = 'glutes';
        $api_url = 'https://api.api-ninjas.com/v1/exercises?muscle=' . $muscle;
        $headers = array(
            'X-Api-Key: hQlFG98mJuyD5UarHs5x3Q==A4N4Elms1buJIkKM'
        );

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $api_url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        $status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        if ($status_code == 200) {
            $exercises = json_decode($response, true);

            ?>
            <table class="table">
            <thead>
            <tr>
                <th>Name</th>
                <th>Type</th>
                <th>Muscle</th>
                <th>Equipment</th>
                <th>Difficulty</th>
                <th>AddExercise</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($exercises as $exercise) { ?>
                <tr>
                    <td><?php echo $exercise['name']; ?></td>
                    <td><?php echo $exercise['type']; ?></td>
                    <td><?php echo $exercise['muscle']; ?></td>
                    <td><?php echo $exercise['equipment']; ?></td>
                    <td><?php echo $exercise['difficulty']; ?></td>
                    <td><input type="checkbox"></td>

                </tr>
            <?php }}?>
        </tbody>
        </table>
        <?php
    }

    public function getTriceps($type){

        $muscle = 'triceps';
        $api_url = 'https://api.api-ninjas.com/v1/exercises?muscle=' . $muscle;
        $headers = array(
            'X-Api-Key: hQlFG98mJuyD5UarHs5x3Q==A4N4Elms1buJIkKM'
        );

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $api_url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        $status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        if ($status_code == 200) {
            $exercises = json_decode($response, true);

            ?>
            <table class="table">
            <thead>
            <tr>
                <th>Name</th>
                <th>Type</th>
                <th>Muscle</th>
                <th>Equipment</th>
                <th>Difficulty</th>
                <th>AddExercise</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($exercises as $exercise) { ?>
                <tr>
                    <td><?php echo $exercise['name']; ?></td>
                    <td><?php echo $exercise['type']; ?></td>
                    <td><?php echo $exercise['muscle']; ?></td>
                    <td><?php echo $exercise['equipment']; ?></td>
                    <td><?php echo $exercise['difficulty']; ?></td>
                    <td><input type="checkbox"></td>

                </tr>
            <?php }}?>
        </tbody>
        </table>
        <?php
    }

    public function getBiceps($type){

        $muscle = 'biceps';
        $api_url = 'https://api.api-ninjas.com/v1/exercises?muscle=' . $muscle;
        $headers = array(
            'X-Api-Key: hQlFG98mJuyD5UarHs5x3Q==A4N4Elms1buJIkKM'
        );

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $api_url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        $status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        if ($status_code == 200) {
            $exercises = json_decode($response, true);

            ?>
            <table class="table">
            <thead>
            <tr>
                <th>Name</th>
                <th>Type</th>
                <th>Muscle</th>
                <th>Equipment</th>
                <th>Difficulty</th>
                <th>AddExercise</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($exercises as $exercise) { ?>
                <tr>
                    <td><?php echo $exercise['name']; ?></td>
                    <td><?php echo $exercise['type']; ?></td>
                    <td><?php echo $exercise['muscle']; ?></td>
                    <td><?php echo $exercise['equipment']; ?></td>
                    <td><?php echo $exercise['difficulty']; ?></td>
                    <td><input type="checkbox"></td>

                </tr>
            <?php }}?>
        </tbody>
        </table>
        <?php
    }


}