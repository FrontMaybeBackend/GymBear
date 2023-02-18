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
        $stmt = $this->conn ->prepare("SELECT * FROM diets");
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

        $stmt = $this->conn ->prepare("SELECT * FROM recomennded");
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

        $stmt = $this->conn ->prepare("SELECT * FROM supplements");
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

    public function displayPPL(){

        $conn = $this->conn->getConnection();
        $stmt = $conn ->prepare("SELECT * FROM recomennded WHERE title ='Push Pull Legs'");
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



    public function displayUL(){

        $stmt = $this->conn ->prepare("SELECT * FROM recomennded WHERE title ='Upper Lower'");
        $stmt ->execute();
        $results = $stmt ->fetchAll();

        $recommendeds = array();
        foreach($results as $result){
            $recommended = new self();
            $recommended->programms = $result['programms'];
            $recommended->img = $result['img'];
            $recommended->title = $result['title'];
            $recommended->idUPL = $result['id'];
            $recommendeds[] = $recommended;
        }
        return $recommendeds;
    }

    public function displayFBW(){

        $stmt = $this->conn ->prepare("SELECT * FROM recomennded WHERE title ='Full Body Workout'");
        $stmt ->execute();
        $results = $stmt ->fetchAll();
        $recommendeds = array();
        foreach($results as $result){
            $recommended = new self();
            $recommended->programms = $result['programms'];
            $recommended->img = $result['img'];
            $recommended->title = $result['title'];
            $recommended->idFBW = $result['id'];
            $recommendeds[] = $recommended;
        }
        return $recommendeds;
    }

    public function displayBSL(){

        $stmt = $this->conn ->prepare("SELECT * FROM recomennded WHERE title ='Split'");
        $stmt ->execute();
        $results = $stmt ->fetchAll();
        $recommendeds = array();
        foreach($results as $result){
            $recommended = new self();
            $recommended->programms = $result['programms'];
            $recommended->img = $result['img'];
            $recommended->title = $result['title'];
            $recommended->idSPL = $result['id'];
            $recommendeds[] = $recommended;
        }
        return $recommendeds;
    }

    public function displayCarbs()
    {

        $stmt = $this->conn->prepare("SELECT * FROM diets WHERE title ='Carbs'");
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
        $stmt = $this->conn->prepare("SELECT * FROM diets WHERE title ='Fats'");
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

    public function displayCreatine(){

        $stmt = $this->conn ->prepare("SELECT * FROM supplements WHERE title ='Creatine'");
        $stmt ->execute();
        $results = $stmt ->fetchAll();
        $supplementss = array();
        foreach($results as $result){
            $supplements = new self();
            $supplements->bodySupp = $result['body'];
            $supplements->imgSupp = $result['img'];
            $supplements->titleSupp = $result['title'];
            $supplements->idCRE = $result['id'];
            $supplementss[] = $supplements;
        }
        return $supplementss;
    }

    public function displayProtein(){

        $stmt = $this->conn ->prepare("SELECT * FROM supplements WHERE title ='Protein'");
        $stmt ->execute();
        $results = $stmt ->fetchAll();
        $supplementss = array();
        foreach($results as $result){
            $supplements = new self();
            $supplements->bodySupp = $result['body'];
            $supplements->imgSupp = $result['img'];
            $supplements->titleSupp = $result['title'];
            $supplements->idPRO = $result['id'];
            $supplementss[] = $supplements;
        }
        return $supplementss;
    }

    public function displayVitamins(){

        $stmt = $this->conn ->prepare("SELECT * FROM supplements WHERE title ='Vitamins'");
        $stmt ->execute();
        $results = $stmt ->fetchAll();
        $supplementss = array();
        foreach($results as $result){
            $supplements = new self();
            $supplements->bodySupp = $result['body'];
            $supplements->imgSupp = $result['img'];
            $supplements->titleSupp = $result['title'];
            $supplements->idVIT = $result['id'];
            $supplementss[] = $supplements;
        }
        return $supplementss;
    }


}