<?php
include("connect.php");
class DisplayUserProgram extends connect
{

    public $excName;

    public $excSeries;

    public $excReps;

    public $nameTrain;

    public $dayTrain;
    public function displayProgram(){

        $stmt = $this->conn ->prepare("SELECT exc_name,exc_series,exc_reps,name_train,day FROM users_plans WHERE username =:username");
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

        $stmt = $this->conn ->prepare("SELECT exc_name, exc_series,exc_reps,name_train,day  FROM users_plans WHERE username =:username  AND day ='monday'");
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

    public function displayTuesdayProgram(){

        $stmt = $this->conn ->prepare("SELECT exc_name, exc_series,exc_reps,name_train,day FROM users_plans WHERE username =:username  AND day ='tuesday'");
        $stmt ->bindParam(":username", $_SESSION['username']);
        $stmt ->execute();
        $results = $stmt ->fetchAll();
        $tuesdayPrograms = array();
        foreach($results as $result){
            $tuesdayProgram = new self();
            $tuesdayProgram->excName = $result['exc_name'];
            $tuesdayProgram->excSeries = $result['exc_series'];
            $tuesdayProgram->excReps = $result['exc_reps'];
            $tuesdayProgram->nameTrain =$result['name_train'];
            $tuesdayProgram->dayTrain=$result['day'];
            $tuesdayPrograms[] = $tuesdayProgram;

        }
        return $tuesdayPrograms;

    }

    public function displayWednesdayProgram()
    {

        $stmt = $this->conn->prepare("SELECT  exc_name, exc_series,exc_reps,name_train,day FROM users_plans WHERE username =:username  AND day ='wednesday'");
        $stmt->bindParam(":username", $_SESSION['username']);
        $stmt->execute();
        $results = $stmt->fetchAll();
        $wednesdayPrograms = array();
        foreach ($results as $result) {
            $wednesdayProgram = new self();
            $wednesdayProgram->excName = $result['exc_name'];
            $wednesdayProgram->excSeries = $result['exc_series'];
            $wednesdayProgram->excReps = $result['exc_reps'];
            $wednesdayProgram->nameTrain = $result['name_train'];
            $wednesdayProgram->dayTrain = $result['day'];
            $wednesdayPrograms[] = $wednesdayProgram;

        }
        return $wednesdayPrograms;

    }
        public function displayThursdayProgram()
        {

            $stmt = $this->conn->prepare("SELECT exc_name, exc_series,exc_reps,name_train,day  FROM users_plans WHERE username =:username  AND day ='thursday'");
            $stmt->bindParam(":username", $_SESSION['username']);
            $stmt->execute();
            $results = $stmt->fetchAll();
            $thursdayPrograms = array();
            foreach ($results as $result) {
                $thursdayProgram = new self();
                $thursdayProgram->excName = $result['exc_name'];
                $thursdayProgram->excSeries = $result['exc_series'];
                $thursdayProgram->excReps = $result['exc_reps'];
                $thursdayProgram->nameTrain = $result['name_train'];
                $thursdayProgram->dayTrain = $result['day'];
                $thursdayPrograms[] = $thursdayProgram;

            }
            return $thursdayPrograms;
        }

            public function displayFridayProgram()
            {

                $stmt = $this->conn->prepare("SELECT exc_name, exc_series,exc_reps,name_train,day FROM users_plans WHERE username =:username  AND day ='friday'");
                $stmt->bindParam(":username", $_SESSION['username']);
                $stmt->execute();
                $results = $stmt->fetchAll();

                $fridayPrograms = array();
                foreach ($results as $result) {
                    $fridayProgram = new self();
                    $fridayProgram->excName = $result['exc_name'];
                    $fridayProgram->excSeries = $result['exc_series'];
                    $fridayProgram->excReps = $result['exc_reps'];
                    $fridayProgram->nameTrain = $result['name_train'];
                    $fridayProgram->dayTrain = $result['day'];
                    $fridayPrograms[] = $fridayProgram;

                }
                return $fridayPrograms;
            }

                public function displaySaturdayProgram()
                {

                    $stmt = $this->conn->prepare("SELECT exc_name, exc_series,exc_reps,name_train,day FROM users_plans WHERE username =:username  AND day ='saturday'");
                    $stmt->bindParam(":username", $_SESSION['username']);
                    $stmt->execute();
                    $results = $stmt->fetchAll();
                    $saturdayPrograms = array();
                    foreach ($results as $result) {
                        $saturdayProgram = new self();
                        $saturdayProgram->excName = $result['exc_name'];
                        $saturdayProgram->excSeries = $result['exc_series'];
                        $saturdayProgram->excReps = $result['exc_reps'];
                        $saturdayProgram->nameTrain = $result['name_train'];
                        $saturdayProgram->dayTrain = $result['day'];
                        $saturdayPrograms[] = $saturdayProgram;

                    }
                    return $saturdayPrograms;

                }
                    public function displaySundayProgram()
                    {
                        $stmt = $this->conn->prepare("SELECT exc_name, exc_series,exc_reps,name_train,day FROM users_plans WHERE username =:username  AND day ='sunday'");
                        $stmt->bindParam(":username", $_SESSION['username']);
                        $stmt->execute();
                        $results = $stmt->fetchAll();
                        $sundayPrograms = array();
                        foreach ($results as $result) {
                            $sundayProgram = new self();
                            $sundayProgram->excName = $result['exc_name'];
                            $sundayProgram->excSeries = $result['exc_series'];
                            $sundayProgram->excReps = $result['exc_reps'];
                            $sundayProgram->nameTrain = $result['name_train'];
                            $sundayProgram->dayTrain = $result['day'];
                            $sundayPrograms[] = $sundayProgram;

                        }
                        return $sundayPrograms;


    }

}