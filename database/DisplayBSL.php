<?php

include("connect.php");
class DisplayBSL extends connect
{
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
}