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
        $stmt = $this->conn ->prepare("SELECT title,img,diet,id FROM diets");
        $stmt ->execute();
        $results = $stmt ->fetchAll();
        $diets = array();
        foreach($results as $result){
            //Tworzy obiekt nowej klasy w tym wypadku obiekt klasy DietConfig.
            $diet = new self();
            $diet->titleDiet = $result['title'];
            $diet->imgDiet = $result['img'];
            $diet->mainDiet = $result['diet'];
            $diet->idDiet = $result['id'];
            $diets[] = $diet;
        }
        return $diets;
    }


    public function displayProgramms(){

        $stmt = $this->conn ->prepare("SELECT programms,img,title,id FROM recomennded");
        $stmt ->execute();
        $results = $stmt ->fetchAll();
        $recommendeds = array();
        foreach($results as $result){
            $recommended = new self();
            $recommended->programms = $result['programms'];
            $recommended->img = $result['img'];
            $recommended->title = $result['title'];
            $recommended->idReco = $result['id'];
            $recommendeds[] = $recommended;
        }
        return $recommendeds;
    }


    public function displaySupplements(){

        $stmt = $this->conn ->prepare("SELECT body,img,title,id FROM supplements");
        $stmt ->execute();
        $results = $stmt ->fetchAll();

        $supplementss = array();
        foreach($results as $result){
            $supplements = new self();
            $supplements->bodySupp = $result['body'];
            $supplements->imgSupp = $result['img'];
            $supplements->titleSupp = $result['title'];
            $supplements->idSupp = $result['id'];
            $supplementss[] = $supplements;
        }
        return $supplementss;
    }






}