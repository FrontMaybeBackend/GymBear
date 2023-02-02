<?php
include_once "connect.php";
class ProgrammsConfig extends connect
{

    public $programms;
    public $title;
    public $img;
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


}