<?php

include("connect.php");
class DeleteProgramConfig extends connect
{


    public function deleteProgram(){
        $training_id = isset($_GET['id']) ? $_GET['id'] : 0;
        $stmt = $this->conn->prepare("DELETE FROM recomennded WHERE id = :id");
        $stmt->bindParam(':id', $training_id);
        $stmt->execute();
        echo '<p style="color:white; text-align: center">Succeded in removing the program</p>';
        ?>
        <a class="text-decoration-none" href="/xampp/GymBear/RecommendedProgramms.php" style="color:white; display: flex; justify-content: center">  <p class ="text-uppercase"> Click here to back :)</a></p>
        <?php
        exit();
    }

    public function deleteDiet(){
        $diet_id = isset($_GET['id']) ? $_GET['id'] : 0;

        $stmt = $this->conn->prepare("DELETE FROM diets WHERE id = :id");
        $stmt->bindParam(':id', $diet_id);
        $stmt->execute();
        echo '<p style="color:white; text-align: center">Succeded in removing the program</p>';
        ?>
        <a class="text-decoration-none" href="/xampp/GymBear/RecommendedProgramms.php" style="color:white; display: flex; justify-content: center">  <p class ="text-uppercase"> Click here to back :)</a></p>
        <?php
        exit();
    }

    public function deleteSupplements(){
        $diet_id = isset($_GET['id']) ? $_GET['id'] : 0;
        $stmt = $this->conn->prepare("DELETE FROM supplements WHERE id = :id");
        $stmt->bindParam(':id', $diet_id);
        $stmt->execute();
        echo '<p style="color:white; text-align: center">Succeded in removing the program</p>';
        ?>
        <a class="text-decoration-none" href="/xampp/GymBear/RecommendedProgramms.php" style="color:white; display: flex; justify-content: center">  <p class ="text-uppercase"> Click here to back :)</a></p>
        <?php
        exit();
    }
}