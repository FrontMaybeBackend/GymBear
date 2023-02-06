<?php

include("connect.php");
class DisplayRecomennded extends connect
{

    public $titleDiet;
    public $imgDiet;
    public $mainDiet;

    public $programms;
    public $title;
    public $img;

    public $titleSupp;
    public $bodySupp;
    public $imgSupp;

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


    public function displayProgramms(){
        $database = new connect();
        $conn = $database->getConnection();
        $stmt = $conn ->prepare("SELECT * FROM recomennded");
        $stmt ->execute();
        $results = $stmt ->fetchAll();
        $recommendeds = array();
        foreach($results as $result){
            $recommended = new self();
            $recommended->programms = $result['programms'];
            $recommended->img = $result['img'];
            $recommended->title = $result['title'];
            $recommendeds[] = $recommended;
        }
        return $recommendeds;
    }


    public function displaySupplements(){
        $database = new connect();
        $conn = $database->getConnection();
        $stmt = $conn ->prepare("SELECT * FROM supplements");
        $stmt ->execute();
        $results = $stmt ->fetchAll();
        $supplementss = array();
        foreach($results as $result){
            $supplements = new self();
            $supplements->bodySupp = $result['body'];
            $supplements->imgSupp = $result['img'];
            $supplements->titleSupp = $result['title'];
            $supplementss[] = $supplements;
        }
        return $supplementss;
    }






}