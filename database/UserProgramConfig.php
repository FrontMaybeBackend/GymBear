<?php

class UserProgramConfig extends connect

{

    public function addUserPrograms($name,$exercise_series, $exercise_rep,$nameExc){
        $connect = new connect();

        $conn = $connect->getConnection();

                $stmt = $conn->prepare("INSERT INTO users_plans (username, exc_series, exc_reps, name_train,exc_name) VALUES (?,?,?,?,?)");
                $stmt->bindParam(1, $_SESSION['username']);
                $stmt->bindParam(2, $exercise_series);
                $stmt->bindParam(3, $exercise_rep);
                $stmt->bindParam(4, $name);
        $stmt->bindParam(5, $nameExc);
                $stmt->execute();
                //komunikat po zakończeniu dodawania ćwiczeń
                echo "Exercise added successfully!";

        }


}