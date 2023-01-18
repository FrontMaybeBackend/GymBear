<?php
include("config.php");
include("navbar.php");


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

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <section class="mx-auto my-5" style="max-width: 23rem;">
            <div class="card" width="250px">
                <div class="card-body d-flex flex-row">
                    <img src="https://mdbootstrap.com/img/Photos/Avatars/avatar-8.jpg" class="rounded-circle me-3" height="50px" width="50px" alt="avatar" />
                    <div>
                        <h5 class="card-title font-weight-bold mb-2">New spicy meals</h5>
                        <p class="card-text"><i class="far fa-clock pe-2"></i>07/24/2018</p>
                    </div>
                </div>
                <div class="bg-image hover-overlay ripple rounded-0" data-mdb-ripple-color="light">
                    <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Horizontal/Food/full page/2.jpg" alt="Card image cap" />
                    <a href="#!">
                        <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                    </a>
                </div>
                <div class="card-body">
                    <p class="card-text collapse" id="collapseContent">
                        Recently, we added several exotic new dishes to our restaurant menu. They come from
                        countries such as Mexico, Argentina, and Spain. Come to us, have some wine and enjoy
                        our juicy meals from around the world.
                    </p>
                    <div class="d-flex justify-content-between">
                        <a class="btn btn-link link-danger p-md-1 my-1" data-mdb-toggle="collapse" href="#collapseContent" role="button" aria-expanded="false" aria-controls="collapseContent">Read more</a>
                    </div>
                </div>
            </div>

        </section>
    </div>
</body>

</html>