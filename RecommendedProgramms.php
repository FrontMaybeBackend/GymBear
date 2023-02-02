<?php
include_once("navbar.php");
include("database/ProgrammsConfig.php");
include("database/DietConfig.php");


$programms = new ProgrammsConfig();

$display = $programms ->displayProgramms();


$diets = new DietConfig();

$displayDiet = $diets ->displayDiets();






?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LoginPanel</title>


    <style>
        .error {
            color: red;

        }
    </style>
</head>

<body>

<div class="container">
    <p>Recommended Programms for Training !</p>
    <?php foreach($display as $recommendeds): ?>
    <section class="mx-auto my-5" style="max-width: 23rem;">
        <div class="card">
            <div class="card-body d-flex flex-row">
                <img src="./images/admin.webp" class="rounded-circle me-3" height="50px" width="50px" alt="avatar" />
                <div>
                    <h5 class="card-title font-weight-bold mb-2"></h5>
                    <p class="card-text"><i class="far fa-clock pe-2"></i>
                        <?php
                        echo $recommendeds->title;
                        ?>
                    </p>
                </div>
            </div>
            <div class="bg-image hover-overlay ripple rounded-0" data-mdb-ripple-color="light">
                <img class="img-fluid" src="./images/<?php echo $recommendeds->img; ?>" width="100%" height="50%" alt="Card image cap" />
                <a href="#!">
                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
            </div>
            <div class="card-body">
                <p class="card-text collapse" id="collapseContent">
                    <?php echo $recommendeds->programms ?>
                </p>
                <div class="d-flex justify-content-between">
                    <a id="readMore" class="btn btn-link link-danger p-md-1 my-1" data-mdb-toggle="collapse" href="#collapseContent" role="button" aria-expanded="false" aria-controls="collapseContent">Read more</a>
                </div>
            </div>
        </div>

    </section>
</div>
<?php endforeach; ?>
</div>

<div class="container">

    <p>Recommended Diet!</p>
    <?php foreach($displayDiet as $diet): ?>
        <section class="mx-auto my-5" style="max-width: 23rem;">
            <div class="card">
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
                    <div class="d-flex justify-content-between">
                        <a id="readMore" class="btn btn-link link-danger p-md-1 my-1" data-mdb-toggle="collapse" href="#collapseContent" role="button" aria-expanded="false" aria-controls="collapseContent">Read more</a>
                    </div>
                </div>
            </div>
        </section>
    <?php endforeach; ?>
</div>


</body>

</html>
