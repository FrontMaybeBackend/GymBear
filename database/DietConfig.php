<?php

include_once("connect.php");
class DietConfig extends connect
{

    public $titleDiet;
    public $imgDiet;
    public $mainDiet;

    //Funkcja, która pobiera dane z bazy, foreach  przeglada kazdy element tablicy diets.
    public function displayDiets(){
        $database = new connect();
        $conn = $database->getConnection();
        $stmt = $conn ->prepare("SELECT * FROM diets");
        $stmt ->execute();
        $results = $stmt ->fetchAll();

        $diets = array();
        foreach($results as $result){
            //Tworzy obiekt nowej klasy w tym wypadku obiekt klasy DietConfig.
            $diet = new self();
            $diet->titleDiet = $result['title'];
            $diet->imgDiet = $result['img'];
            $diet->mainDiet = $result['diet'];
            $diets[] = $diet;
        }
        return $diets;
        }


}