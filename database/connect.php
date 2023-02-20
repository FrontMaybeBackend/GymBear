<?php


class connect
{
    public function __construct()
    {
        try {
            $this->conn = new PDO('mysql:host=mysql.mikr.us;dbname=db_x382', 'x382', '815F_121078');
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Failed:" . $e->getMessage();
        }
    }

    public function getConnection()
    {
        return $this->conn;
    }


    public function closeConnection()
    {
        $this->conn = null;
    }











}