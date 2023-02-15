<?php

namespace classes;
use connect;

include("database/connect.php");

class Exercises extends connect
{

    public function getChest($type)
    {
        $muscle = 'chest';
        $api_url = 'https://api.api-ninjas.com/v1/exercises?muscle=' . $muscle;
        $headers = array(
            'X-Api-Key: hQlFG98mJuyD5UarHs5x3Q==A4N4Elms1buJIkKM'
        );

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $api_url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        $status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        if ($status_code == 200) {
            $exercises = json_decode($response, true);
            return $exercises;
        } else {
            return array();
        }

    }


    public function getBack($type){

        $muscle = 'middle_back';
        $api_url = 'https://api.api-ninjas.com/v1/exercises?muscle=' . $muscle;
        $headers = array(
            'X-Api-Key: hQlFG98mJuyD5UarHs5x3Q==A4N4Elms1buJIkKM'
        );

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $api_url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        $status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        if ($status_code == 200) {
            $exercises = json_decode($response, true);
            return $exercises;
        } else {
            return array();
        }
    }


    public function getLegs($type){

        $muscle = 'quadriceps';
        $api_url = 'https://api.api-ninjas.com/v1/exercises?muscle=' . $muscle;
        $headers = array(
            'X-Api-Key: hQlFG98mJuyD5UarHs5x3Q==A4N4Elms1buJIkKM'
        );

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $api_url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        $status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        if ($status_code == 200) {
            $exercises = json_decode($response, true);
            return $exercises;
        } else {
            return array();
        }

    }

    public function getAbs($type){

        $muscle = 'abdominals';
        $api_url = 'https://api.api-ninjas.com/v1/exercises?muscle=' . $muscle;
        $headers = array(
            'X-Api-Key: hQlFG98mJuyD5UarHs5x3Q==A4N4Elms1buJIkKM'
        );

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $api_url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        $status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        if ($status_code == 200) {
            $exercises = json_decode($response, true);
            return $exercises;
        } else {
            return array();
        }

    }

    public function getShoulders($type){

        $muscle = 'shoulders';
        $api_url = 'https://api.api-ninjas.com/v1/exercises?muscle=' . $muscle;
        $headers = array(
            'X-Api-Key: hQlFG98mJuyD5UarHs5x3Q==A4N4Elms1buJIkKM'
        );

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $api_url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        $status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        if ($status_code == 200) {
            $exercises = json_decode($response, true);
            return $exercises;
        } else {
            return array();
        }

    }

    public function getGlutes($type){

        $muscle = 'glutes';
        $api_url = 'https://api.api-ninjas.com/v1/exercises?muscle=' . $muscle;
        $headers = array(
            'X-Api-Key: hQlFG98mJuyD5UarHs5x3Q==A4N4Elms1buJIkKM'
        );

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $api_url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        $status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        if ($status_code == 200) {
            $exercises = json_decode($response, true);
            return $exercises;
        } else {
            return array();
        }


    }

    public function getTriceps($type){

        $muscle = 'triceps';
        $api_url = 'https://api.api-ninjas.com/v1/exercises?muscle=' . $muscle;
        $headers = array(
            'X-Api-Key: hQlFG98mJuyD5UarHs5x3Q==A4N4Elms1buJIkKM'
        );

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $api_url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        $status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        if ($status_code == 200) {
            $exercises = json_decode($response, true);
            return $exercises;
        } else {
            return array();
        }

    }

    public function getBiceps($type){

        $muscle = 'biceps';
        $api_url = 'https://api.api-ninjas.com/v1/exercises?muscle=' . $muscle;
        $headers = array(
            'X-Api-Key: hQlFG98mJuyD5UarHs5x3Q==A4N4Elms1buJIkKM'
        );

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $api_url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        $status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        if ($status_code == 200) {
            $exercises = json_decode($response, true);
            return $exercises;
        } else {
            return array();
        }

    }


}