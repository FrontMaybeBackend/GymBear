<?php

include_once("connect.php");
class FormConfig extends connect
{


   public function addFormToDatabase($titleForm, $body, $img){
       $dataBase = new connect();
       $conn = $dataBase->getConnection();
       $stmt = $conn->prepare("INSERT INTO recomennded (`programms`, `title`, `img`) VALUES (?,?,?)");
       $stmt->bindParam(1,$body,PDO::PARAM_STR);
       $stmt->bindParam(2,$titleForm,PDO::PARAM_STR);
       $stmt->bindParam(3,$img, PDO::PARAM_LOB);
       $stmt->execute();
       exit();
   }

   public function addDietToDataBase($titleForm, $body, $img){
       $dataBase = new connect();
       $conn = $dataBase->getConnection();
       $stmt = $conn->prepare("INSERT INTO diets (`title`, `diet`, `img`) VALUES (?,?,?)");
       $stmt->bindParam(1,$titleForm,PDO::PARAM_STR);
       $stmt->bindParam(2,$body,PDO::PARAM_STR);
       $stmt->bindParam(3,$img, PDO::PARAM_LOB);
       $stmt->execute();
       exit();
   }



}