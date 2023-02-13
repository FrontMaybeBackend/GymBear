<?php

namespace classes;

class Exercises
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
            <td><button>+</button></td>

        </tr>
    <?php }}?>
    </tbody>
</table>
<?php
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
                    <td><button>+</button></td>

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
                    <td><button>+</button></td>

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
                    <td><button>+</button></td>

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
                    <td><button>+</button></td>

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
                    <td><button>+</button></td>

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
                    <td><button>+</button></td>

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
                    <td><button>+</button></td>

                </tr>
            <?php }}?>
        </tbody>
        </table>
        <?php
    }


}