<?php

class UserProgramConfig extends connect

{

    public function addUserPrograms($exercises){
        $connect = new connect();

        $conn = $connect->getConnection();
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