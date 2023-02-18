<?php

include("connect.php");
class DisplayUPL extends connect
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

}