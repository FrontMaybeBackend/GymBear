<?php
include("config.php");
include("navbar.php");

session_start();
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
$id = $_GET['id'];

$stmt = $conn->prepare("SELECT * FROM diets where id = :id");
$stmt->bindParam(':id', $id);
$stmt->execute();
while ($result = $stmt->fetch()) {
    echo $result['name'];
    echo $result['type'];
?>
    <img class="img-fluid" src="./images/<?php echo $result['img'] ?>" width="100%" height="50%" alt="Card image cap" />
<?php


}

?>


<!DOCTYPE html>
<html lang=" en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>



</html>