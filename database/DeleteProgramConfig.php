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
        exit();
    }
}