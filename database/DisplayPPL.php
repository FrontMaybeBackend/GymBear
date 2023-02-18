<?php

include("connect.php");
class DisplayPPL extends connect
{
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
}