<?php


class connect
{

    protected function connected()
    {

        try {
            $host = "localhost";
            $db_user = "root";
            $db_password = "";
            $db_name = "gymweb";
            $conn = new PDO('mysql:host=localhost;dbname=gymweb', $db_user, $db_password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "success";
        } catch (PDOException $e) {
            echo "failed:" . $e->getMessage();
        }
    }


}