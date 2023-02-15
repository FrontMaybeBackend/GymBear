<?php

namespace classes;
use connect;

include("database/connect.php");

class Exercises extends connect
{

    public function getChest($type){

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

?>
    <form method="POST">
        <table class="table">
            <thead>
            <tr>

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
            <?php foreach ($exercises as $exercise) { ?>
                <tr>
                    <td><?php echo $exercise['name']; ?></td>
                    <td><?php echo $exercise['type']; ?></td>
                    <td><?php echo $exercise['muscle']; ?></td>
                    <td><?php echo $exercise['equipment']; ?></td>
                    <td><?php echo $exercise['difficulty']; ?></td>
                    <td><label for="series"></label>
                    <select name="series" id="series">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select></td>
                    <td><label for="rep"></label>
                        <select name="rep" id="rep">
                            <option value="3-5">3-5</option>
                            <option value="5-8">5-8</option>
                            <option value="8-12">8-12</option>
                            <option value="12-15">12-15</option>
                            <option value="15-25">15-25</option>
                        </select></td>
                    <td>
                        <input type="checkbox" name="exercise[]" value="<?php echo $exercise['name']; ?>">
                    </td>
                </tr>
            <?php  }} ?>
            </tbody>
        </table>
        <button type="submit" name="Compose">Compose Workout</button>
    </form>

    <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // set series and rep values for current exercise
            $series = $_POST['series'];
            $rep = $_POST['rep'];

            // create an instance of the connect class
            $connect = new connect();

// get the PDO connection object
            $conn = $connect->getConnection();

// insert the selected exercises into the database for the logged in user
                foreach ($exercises as $exercise) {
                    if (isset($_POST['exercise']) && in_array($exercise['name'], $_POST['exercise']) && isset($series) && isset($rep)) {
                    $stmt = $conn->prepare("INSERT INTO  users_plans (username, exc_name, exc_series, exc_reps) VALUES (?,?,?,?)");
                    $stmt->bindParam(1, $_SESSION['username']);
                    $stmt->bindParam(2, $exercise['name']);
                    $stmt->bindParam(3, $series);
                    $stmt->bindParam(4, $rep);
                    $stmt->execute();
                }
            }


            //komunikat po zakończeniu dodawania ćwiczeń
            echo "Exercise added successfully!";
        }
    }




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