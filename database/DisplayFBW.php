<?php

include ("connect.php");
class DisplayFBW extends connect
{

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


}