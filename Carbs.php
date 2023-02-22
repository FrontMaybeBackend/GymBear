<?php
include("navbaro.php");

include("database/DisplayDiets.php");

$displayCarbs = new DisplayDiets();

$displayCarb = $displayCarbs->displayCarbs();


?>


<!DOCTYPE html>
<html lang=" en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="carbs.css">
    <title>Document</title>
    <style>
        .text-center{
            color: white;
        }
    </style>
</head>
<body>


<h4 class="text-center">Recommended Carbs Diet !</h4>


<div class="container d-flex flex-row flex-wrap justify-content-between  ">


    <?php foreach($displayCarb as $diet): ?>
        <section class="mx-auto my-5 " style="max-width: 23rem;" >
            <div class="card h-100"  style=" width: 250px;
             height: 300px;" >
                <div class="card-body d-flex flex-row">
                    <img src="./images/admin.webp" class="rounded-circle me-3" height="50px" width="50px" alt="avatar" />
                    <div>
                        <h5 class="card-title font-weight-bold mb-2"></h5>
                        <p class="card-text"><i class="far fa-clock pe-2"></i>
                            <?php echo $diet->titleDiet; ?>
                        </p>
                    </div>
                </div>
                <div class="bg-image hover-overlay ripple rounded-0" data-mdb-ripple-color="light">
                    <img class="img-fluid" src="./images/<?php echo $diet->imgDiet; ?>" width="100%" height="50%" alt="Card image cap" />
                    <a href="#!">
                        <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                    </a>
                </div>
                <div class="card-body">
                    <p class="card-text collapse" id="collapseContent">
                        <?php echo $diet->mainDiet ?>
                    </p>
                </div>
                    <div class="card-footer">
                        <a id="readMore" class="btn btn-link link-dark p-md-1 my-1" data-mdb-toggle="collapse" href="ReadDIET.php?id=<?php echo $diet->idCARB; ?>" role="button" aria-expanded="false" aria-controls="collapseContent">Read more</a>
                    </div>
            </div>
        </section>
    <?php endforeach; ?>

</div>

</body>
</html>
<?php include("footer.php");?>