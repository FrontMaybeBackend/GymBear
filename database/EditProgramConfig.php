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
        return $training;
    }

    public function editProgram($title, $programs,$img){
        $training_id = isset($_GET['id']) ? $_GET['id'] : 0;
        $dataBase = new connect();
        $conn = $dataBase->getConnection();
        $stmt = $conn->prepare("UPDATE recomennded SET title = :title, programms = :programs, img =:img WHERE id = :id");
        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':programs', $programs);
        $stmt->bindParam(':img', $img);
        $stmt->bindParam(':id', $training_id);
        $stmt->execute();
        exit();
    }

}