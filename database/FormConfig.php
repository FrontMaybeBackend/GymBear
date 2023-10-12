<?php

include_once("Connect.php");

class FormConfig extends connect
{


    public function addFormToDatabase($titleForm, $body, $img)
    {
        $database = new connect();
        $conn = $database->getConnection();
        $stmt = $conn->prepare("INSERT INTO recommended (`programms`, `title`, `img`) VALUES (?,?,?)");
        $stmt->bindParam(1, $body, PDO::PARAM_STR);
        $stmt->bindParam(2, $titleForm, PDO::PARAM_STR);
        $stmt->bindParam(3, $img, PDO::PARAM_LOB);
        $stmt->execute();
        echo '<p style="color:white; text-align: center">I was able to add a program :)</p>';
        ?>
        <a class="text-decoration-none" href="RecommendedProgramms.php"
           style="color:white; display: flex; justify-content: center"><p class="text-uppercase"> Click here to back :)
        </a></p>
        <?php
        exit();

    }

    public function addDietToDataBase($titleForm, $body, $img)
    {
        $database = new connect();
        $conn = $database->getConnection();
        $stmt = $conn->prepare("INSERT INTO diets (`title`, `diet`, `img`) VALUES (?,?,?)");
        $stmt->bindParam(1, $titleForm, PDO::PARAM_STR);
        $stmt->bindParam(2, $body, PDO::PARAM_STR);
        $stmt->bindParam(3, $img, PDO::PARAM_LOB);
        $stmt->execute();
        exit();
    }

    public function addSupplementsToDataBase($titleForm, $body, $img)
    {
        $database = new connect();
        $conn = $database->getConnection();
        $stmt = $conn->prepare("INSERT INTO supplements (`title`, `body`, `img`)VALUES (?,?,?)");
        $stmt->bindParam(1, $titleForm, PDO::PARAM_STR);
        $stmt->bindParam(2, $body, PDO::PARAM_STR);
        $stmt->bindParam(3, $img, PDO::PARAM_LOB);
        $stmt->execute();
        exit();
    }


}