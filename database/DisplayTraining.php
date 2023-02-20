<?php

include("connect.php");
class DisplayTraining extends connect
{

    public function displayUL(){

        $stmt = $this->conn ->prepare("SELECT programms,img,title,id FROM recomennded WHERE title ='Upper Lower'");
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

    public function displayPPL(){

        $stmt = $this->conn ->prepare("SELECT programms,img,title,id FROM recomennded WHERE title ='Push Pull Legs'");
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

    public function displayFBW(){

        $stmt = $this->conn ->prepare("SELECT programms,img,title,id FROM recomennded WHERE title ='Full Body Workout'");
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

        $stmt = $this->conn ->prepare("SELECT programms,img,title,id FROM recomennded WHERE title ='Split'");
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
}