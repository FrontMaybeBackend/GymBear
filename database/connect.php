<?php


class connect
{
    public function __construct()
    {
        try {
            $this->conn = new PDO('mysql:host=localhost;dbname=gymweb', 'root', '');
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Failed:" . $e->getMessage();
        }
    }

    public function getConnection()
    {
        return $this->conn;
    }












}