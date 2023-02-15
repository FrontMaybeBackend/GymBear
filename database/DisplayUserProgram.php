<?php
include("connect.php");
class DisplayUserProgram extends connect
{

    public $excName;

    public $excSeries;

    public $excReps;

    public $nameTrain;

    public $dayTrain;
    public function displayUserProgram(){
        $database = new connect();
        $conn = $database->getConnection();
        $stmt = $conn ->prepare("SELECT * FROM users_plans WHERE username =:username");
        $stmt ->bindParam(":username", $_SESSION['username']);
        $stmt ->execute();
        $results = $stmt ->fetchAll();

        $userprograms = array();
        foreach($results as $result){
            $userprogram = new self();
            $userprogram->excName = $result['exc_name'];
            $userprogram->excSeries = $result['exc_series'];
            $userprogram->excReps = $result['exc_reps'];
            $userprogram->nameTrain =$result['name_train'];
            $userprogram->dayTrain=$result['day'];
            $userprograms[] = $userprogram;

        }
        return $userprograms;

    }

    public function displayMondayProgram(){
        $database = new connect();
        $conn = $database->getConnection();
        $stmt = $conn ->prepare("SELECT * FROM users_plans WHERE username =:username  AND day ='monday'");
        $stmt ->bindParam(":username", $_SESSION['username']);
        $stmt ->execute();
        $results = $stmt ->fetchAll();

        $mondayPrograms = array();
        foreach($results as $result){
            $mondayProgram = new self();
            $mondayProgram->excName = $result['exc_name'];
            $mondayProgram->excSeries = $result['exc_series'];
            $mondayProgram->excReps = $result['exc_reps'];
            $mondayProgram->nameTrain =$result['name_train'];
            $mondayProgram->dayTrain=$result['day'];
            $mondayPrograms[] = $mondayProgram;

        }
        return $mondayPrograms;

    }


}