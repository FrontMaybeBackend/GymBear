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
          while($result = $stmt->fetch()){
              $this->programms = $result['programms'];
              $this->title = $result['title'];
              $this->img = $result['img'];
          }
    }








}