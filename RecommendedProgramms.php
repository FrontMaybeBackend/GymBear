<?php
include_once("navbar.php");
include("database/ProgrammsConfig.php");
include("database/DietConfig.php");
include_once("classes/DietFormControl.php");



//Wyświetla treningi  z bazy
$programms = new ProgrammsConfig();

$display = $programms ->displayProgramms();


//Wyświetla diety  z bazy
$diets = new DietConfig();

$displayDiet = $diets ->displayDiets();


//Walidacja formularza


if(isset($_POST['sendPrograms'])){


    $titlePrograms = $_POST['titlePrograms'];
    $bodyPrograms = $_POST['bodyPrograms'];
    $imgPrograms  = $_POST['imgPrograms'];

    $recoPrograms = new \classes\FormControl("$titlePrograms", "$bodyPrograms", "$imgPrograms");

    $checkForm = $recoPrograms ->formValidation();

}

if(isset($_POST['sendDiet'])) {
    $titleDiet = $_POST['titleDiet'];
    $bodyDiet = $_POST['bodyDiet'];
    $imgDiet = $_POST['imgDiet'];

    $recoDiets = new \classes\DietFormControl("$titleDiet", "$bodyDiet", $imgDiet);

    $checkFormDiet = $recoDiets->formValidation();

}

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
<h4 class="text-center">Recommended Programms for Training !</h4>
<div class="container d-flex flex-row flex-wrap justify-content-between">
    <?php foreach($display as $recommendeds): ?>
    <section class="mx-auto my-5" style="max-width: 23rem;">
        <div class="card"  style=" width: 250px;
             height: 300px;">
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
                <a href="#">
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

<?php endforeach; ?>
</div>

</div>
<button type="button" id = "btn2" class="btn btn-secondary">AddWorkout</button>

<form id="form2" method="POST">
    <?php
    if($checkForm) {
    echo  '<div class="error">' . $checkForm . '</div>';
    }
    ?>
    <div id="titlePrograms" class="form-floating-mb-3" >
        <input name="titlePrograms" type="text" class="form-control" id="titlePrograms" placeholder="Title" style="width:50%;">
    </div>
    <div id="imgPrograms" class="form-floating-mb-3" >
        <input name="imgPrograms" type="file" class="form-control" id="imgPrograms" Value="upload" style="width:50%;">
    </div>

    <div id="bodyPrograms">
        <label for="bodyPrograms"></label><br>
        <textarea id="bodyPrograms" name="bodyPrograms" rows="15" cols="100" placeholder="Text"></textarea>

            <input id="sendPrograms" name="sendPrograms" type="submit" value="sendPrograms">
    </div>
</form>

<h4 class = "text-center">Recommended Diet!</h4>
<div class="container d-flex flex-row flex-wrap justify-content-between  ">


    <?php foreach($displayDiet as $diet): ?>
        <section class="mx-auto my-5 " style="max-width: 23rem;" >
            <div class="card"  style=" width: 250px;
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
                    <div class="d-flex justify-content-between">
                        <a id="readMore" class="btn btn-link link-danger p-md-1 my-1" data-mdb-toggle="collapse" href="#collapseContent" role="button" aria-expanded="false" aria-controls="collapseContent">Read more</a>
                    </div>
                </div>
            </div>
        </section>
    <?php endforeach; ?>

</div>
<button type="submit" name="addDietButton"  id ="btn" class="btn btn-secondary">AddDiet</button>
<?php
if($checkFormDiet) {
    echo  '<div class="error">' . $checkFormDiet . '</div>';
}
?>
<form id="form" method="POST">
    <div id="titleDiet" class="form-floating-mb-3" >
        <input name="titleDiet" type="text" class="form-control" id="titleDiet" placeholder="Title" style="width:50%;">
    </div>
    <div id="imgDiet" class="form-floating-mb-3" >
        <input name="imgDiet" type="file" class="form-control" id="imgDiet" Value="upload" style="width:50%;">
    </div>

    <div id="text">
        <label for="bodyDiet"></label><br>
        <textarea id="bodyDiet" name="bodyDiet" rows="15" cols="100" placeholder="Text"></textarea>

        <form method="POST">
            <input id="sendDiet" name="sendDiet" type="submit" value="sendDiet">
        </form>

</div>
</form>





</body>
<script

    src="form.js">
</script>

</html>
