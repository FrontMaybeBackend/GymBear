<?php

include("connect.php");
class DisplayDiets extends connect
{

    public function displayCarbs()
    {

        $stmt = $this->conn->prepare("SELECT title,img,diet,id FROM diets WHERE title ='Carbs'");
        $stmt->execute();
        $results = $stmt->fetchAll();
        $diets = array();
        foreach ($results as $result) {
            //Tworzy obiekt nowej klasy w tym wypadku obiekt klasy DietConfig.
            $diet = new self();
            $diet->titleDiet = $result['title'];
            $diet->imgDiet = $result['img'];
            $diet->mainDiet = $result['diet'];
            $diet->idCARB = $result['id'];
            $diets[] = $diet;
        }
        return $diets;

    }

    public function displayFats()
    {
        $stmt = $this->conn->prepare("SELECT title,img,diet,id FROM diets WHERE title ='Fats'");
        $stmt->execute();
        $results = $stmt->fetchAll();
        $diets = array();
        foreach ($results as $result) {
            //Tworzy obiekt nowej klasy w tym wypadku obiekt klasy DietConfig.
            $diet = new self();
            $diet->titleDiet = $result['title'];
            $diet->imgDiet = $result['img'];
            $diet->mainDiet = $result['diet'];
            $diet->idFAT = $result['id'];
            $diets[] = $diet;
        }
        return $diets;

    }

}