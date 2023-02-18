<?php

include("connect.php");
class DisplaySupplements extends connect
{

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