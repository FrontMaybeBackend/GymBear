<?php

include("connect.php");
class EditProgramConfig extends connect
{

    public function showProgramToEdit(){
        $training_id = isset($_GET['id']) ? $_GET['id'] : 0;
        $dataBase = new connect();
        $conn = $dataBase ->getConnection();
        $stmt = $conn->prepare("SELECT * FROM recomennded WHERE id = :id");
        $stmt->bindParam(':id', $training_id);
        $stmt->execute();
        $training = $stmt->fetch();
        $dataBase->closeConnection();
        return $training;
    }

    public function editProgram($title, $programs){
        $training_id = isset($_GET['id']) ? $_GET['id'] : 0;
        $dataBase = new connect();
        $conn = $dataBase->getConnection();
        $stmt = $conn->prepare("UPDATE recomennded SET title = :title, programms = :programs WHERE id = :id");
        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':programs', $programs);
        $stmt->bindParam(':id', $training_id);
        $stmt->execute();
        $dataBase->closeConnection();
        echo "Good job, you edit this program ;)";
        ?>
        <a class="text-decoration-none" href="/xampp/GymBear/RecommendedProgramms.php" style="color:black">  <p class ="text-uppercase"> Click here to back :)</a></p>
        <?php
        exit();
    }

    public function showDietToEdit(){
        $diet_id = isset($_GET['id']) ? $_GET['id'] : 0;
        $dataBase = new connect();
        $conn = $dataBase ->getConnection();
        $stmt = $conn->prepare("SELECT * FROM diets WHERE id = :id");
        $stmt->bindParam(':id', $diet_id);
        $stmt->execute();
        $diet = $stmt->fetch();
        $dataBase->closeConnection();
        return $diet;
    }

    public function editDiet($title, $diet){
        $diet_id = isset($_GET['id']) ? $_GET['id'] : 0;
        $dataBase = new connect();
        $conn = $dataBase->getConnection();
        $stmt = $conn->prepare("UPDATE diets SET title = :title, diet = :diet WHERE id = :id");
        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':diet', $diet);
        $stmt->bindParam(':id', $diet_id);
        $stmt->execute();
        $dataBase->closeConnection();
        echo "Good job, you edit this program ;)";
        ?>
        <a class="text-decoration-none" href="/xampp/GymBear/RecommendedProgramms.php" style="color:black">  <p class ="text-uppercase"> Click here to back :)</a></p>
        <?php
        exit();
    }


    public function showSuppToEdit(){
        $supp_id = isset($_GET['id']) ? $_GET['id'] : 0;
        $dataBase = new connect();
        $conn = $dataBase ->getConnection();
        $stmt = $conn->prepare("SELECT * FROM supplements WHERE id = :id");
        $stmt->bindParam(':id', $supp_id);
        $stmt->execute();
        $supp = $stmt->fetch();
        $dataBase->closeConnection();

        return $supp;
    }

    public function editSupp($title, $supp){
        $supp_id = isset($_GET['id']) ? $_GET['id'] : 0;
        $dataBase = new connect();
        $conn = $dataBase->getConnection();
        $stmt = $conn->prepare("UPDATE supplements SET title = :title, body = :body WHERE id = :id");
        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':body', $supp);
        $stmt->bindParam(':id', $supp_id);
        $stmt->execute();
        $dataBase->closeConnection();
        echo "Good job, you edit this program ;)";
        ?>
        <a class="text-decoration-none" href="/xampp/GymBear/RecommendedProgramms.php" style="color:black">  <p class ="text-uppercase"> Click here to back :)</a></p>
        <?php
        exit();
    }


}