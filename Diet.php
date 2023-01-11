<?php
include("config.php");
include("navbar.php");

$connection = mysqli_connect("localhost", "root", "", "gymweb");
class Diets
{
    public $name;
    public $type;


    function __construct($name, $type)
    {
        $this->name = $name;
        $this->type = $type;
    }

    function get_name()
    {
        return $this->name;
    }
    function get_type()
    {
        return $this->type;
    }
}
$carbs = new Diets("Carbs", "FullCarbs");
$fat = new Diets("Fat", "ketogenic");
echo $carbs->get_name();
echo $fat->get_name();
echo $fat->get_type();
echo $carbs->get_type();
