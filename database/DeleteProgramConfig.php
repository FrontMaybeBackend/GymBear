<?php

include("connect.php");
class DeleteProgramConfig extends connect
{


    public function deleteProgram(){
        $training_id = isset($_GET['id']) ? $_GET['id'] : 0;
        $dataBase = new connect();
        $conn = $dataBase->getConnection();
        $stmt = $conn->prepare("DELETE FROM recomennded WHERE id = :id");
        $stmt->bindParam(':id', $training_id);
        $stmt->execute();
        echo "Succeded in removing the program";
        ?>
        <a class="text-decoration-none" href="/xampp/GymBear/RecommendedProgramms.php" style="color:black">  <p class ="text-uppercase"> Click here to back :)</a></p>
        <?php
        exit();
    }

    public function deleteDiet(){
        $diet_id = isset($_GET['id']) ? $_GET['id'] : 0;
        $dataBase = new connect();
        $conn = $dataBase->getConnection();
        $stmt = $conn->prepare("DELETE FROM diets WHERE id = :id");
        $stmt->bindParam(':id', $diet_id);
        $stmt->execute();
        echo "Succeded in removing the program";
        ?>
        <a class="text-decoration-none" href="/xampp/GymBear/RecommendedProgramms.php" style="color:black">  <p class ="text-uppercase"> Click here to back :)</a></p>
        <?php

        exit();
    }

    public function deleteSupplements(){
        $diet_id = isset($_GET['id']) ? $_GET['id'] : 0;
        $dataBase = new connect();
        $conn = $dataBase->getConnection();
        $stmt = $conn->prepare("DELETE FROM supplements WHERE id = :id");
        $stmt->bindParam(':id', $diet_id);
        $stmt->execute();
        echo "Succeded in removing the program";
        echo "Succeded in removing the program";
        ?>
        <a class="text-decoration-none" href="/xampp/GymBear/RecommendedProgramms.php" style="color:black">  <p class ="text-uppercase"> Click here to back :)</a></p>
        <?php
        exit();
    }
}