<?php

include_once("navbaro.php");
include_once("database/DisplayRecomennded.php");
include_once("classes/DietFormControl.php");
include_once("classes/SupplementsFormControl.php");




//Wyświetla treningi  z bazy
$programms = new DisplayRecomennded();

$display = $programms ->displayProgramms();


//Wyświetla diety  z bazy
$diets = new DisplayRecomennded();

$displayDiet = $diets ->displayDiets();


//Walidacja formularza

$supplements = new DisplayRecomennded();

$displaySupp = $supplements ->displaySupplements();

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

if(isset($_POST['sendSupp'])){
    $titleSupp = $_POST['titleSupp'];
    $bodySupp = $_POST['bodySupp'];
    $imgSupp = $_POST['imgSupp'];

    $recoSupp = new \classes\SupplementsFormControl("$titleSupp", $bodySupp, $imgSupp);

    $checkFormSupp = $recoSupp->formValidation();
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="rp.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <title>LoginPanel</title>


    <style>
        .error {
            color: red;

        }

        a{
            text-decoration:none;
            color:inherit;

        }
        .text-center{
            color:white;
        }

       label{
           color:white;
       }

    </style>
</head>

<body>
<h4 class="text-center">Recommended Programms for Training !</h4>
<div class="container d-flex flex-row flex-wrap justify-content-between">
    <?php foreach($display as $recommendeds): ?>
    <section class="mx-auto my-5" style="max-width: 23rem;">
        <div class="card h-100"  style=" width: 250px;
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
            <div class=" hover-overlay ripple rounded-0" data-mdb-ripple-color="light">
                <img class="img-fluid" src="./images/<?php echo $recommendeds->img; ?>" width="100%" height="50%" alt="Card image cap" />
                <a href="#">
                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
            </div>
            <div class="card-body">
                <p class="card-text collapse" id="collapseContent">
                    <?php echo $recommendeds->programms ?>
                </p>
            </div>
            <div class="card-footer">
                <a id="readMore" class="btn btn-link link-dark p-md-1 my-1" data-mdb-toggle="collapse" href="views/crud/read/ReadTRAINING.php?id=<?php echo $recommendeds->idReco; ?>" role="button" aria-expanded="false" aria-controls="collapseContent">Read more</a>
                <?php
                if (isset($_SESSION["username"]) && $_SESSION["username"] === 'adminadmin') {
                    echo '<button class="btn btn-dark btn-block"><a href="EditProgram.php?id=' . $recommendeds->idReco . '">Edit</a></button>';
                    echo '<button class="btn btn-dark btn-block"><a href="DeleteProgram.php?id=' . $recommendeds->idReco . '">Delete</a></button>';
                }
                ?>
            </div>
        </div>

    </section>

<?php endforeach; ?>
</div>

</div>

<?php if (isset($_SESSION["username"]) && $_SESSION["username"] === 'adminadmin') {

?>
<button type="button" id = "btn2" class="btn btn-secondary">AddWorkout</button>
    <div class="form-outline">
        <form id="form2" method="POST">
            <?php
            if(isset($checkForm)) {
                echo  '<div class="error">' . $checkForm . '</div>';
            }
            ?>
            <label class="form-label p-3" for="textAreaExample1"><strong>Title:</strong></label>
            <textarea class="form-control p-4" id="textAreaExample1" rows="5" name="titlePrograms"></textarea>
            <label class="form-label p-3 " for="textAreaExample2"><strong>Content:</strong></label>
            <textarea class="form-control p-4 w-100" id="textAreaExample2" rows="15" name="bodyPrograms"></textarea>
            <label class="form-label p-3" for="img"><strong>IMG:</strong></label>
            <input name="imgPrograms" type="file" id="img" class="form-control" name="imgPrograms" Value="upload">
            <button class="p-2  m-3 align-content-end d-flex" name="sendPrograms" type="submit">Add</button>
        </form>
    </div>

<?php } ?>
<hr>

<h4 class = "text-center">Recommended Diet!</h4>
<div class="container d-flex flex-row flex-wrap justify-content-between  ">


    <?php foreach($displayDiet as $diet): ?>
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
                <div class=" hover-overlay ripple rounded-0" data-mdb-ripple-color="light">
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
                    <a id="readMore" class="btn btn-link link-dark p-md-1 my-1" data-mdb-toggle="collapse" href="views/allProgramms/Diet.php?id=<?php echo $diet->idDiet; ?>" role="button" aria-expanded="false" aria-controls="collapseContent">Read more</a>
                    <?php
                    if (isset($_SESSION["username"]) && $_SESSION["username"] === 'adminadmin') {
                        echo '<button class="btn btn-dark btn-block" > <a href="EditDiet.php?id=' . $diet->idDiet . '">Edit</a></button>';
                        echo '<button class="btn btn-dark btn-block"><a href="DeleteDiet.php?id=' . $diet->idDiet . '">Delete</a></button>';
                    }

                    ?>
                </div>
            </div>
        </section>
    <?php endforeach; ?>

</div>
<?php if (isset($_SESSION["username"]) && $_SESSION["username"] === 'adminadmin') {

    ?>
<button type="submit" name="addDietButton"  id ="btn" class="btn btn-secondary">AddDiet</button>
    <div class="form-outline">
        <form id="form" method="POST">
            <?php
            if(isset($checkFormDiet)) {
                echo  '<div class="error">' . $checkFormDiet . '</div>';
            }
            ?>
            <label class="form-label p-3" for="textAreaExample1"><strong>Title:</strong></label>
            <textarea class="form-control p-4" id="textAreaExample1" rows="5" name="titleDiet"></textarea>
            <label class="form-label p-3 " for="textAreaExample2"><strong>Content:</strong></label>
            <textarea class="form-control p-4 w-100" id="textAreaExample2" rows="15" name="bodyDiet"></textarea>
            <label class="form-label p-3" for="img"><strong>IMG:</strong></label>
            <input  type="file" id="img" class="form-control" name="imgDiet" Value="upload">
            <button class="p-2  m-3 align-content-end d-flex" name="sendDiet" type="submit">Add</button>
        </form>
    </div>

<?php } ?>


<hr>
<h4 class = "text-center"> Recommended Supplements</h4>



<div class="container d-flex flex-row flex-wrap justify-content-between">
    <?php foreach($displaySupp as $supplementss): ?>
        <section class="mx-auto my-5" style="max-width: 23rem;">
            <div class="card h-100"  style=" width: 250px;
             height: 300px;">
                <div class="card-body d-flex flex-row">
                    <img src="./images/admin.webp" class="rounded-circle me-3" height="50px" width="50px" alt="avatar" />
                    <div>
                        <h5 class="card-title font-weight-bold mb-2"></h5>
                        <p class="card-text"><i class="far fa-clock pe-2"></i>
                            <?php
                            echo $supplementss->titleSupp;
                            ?>
                        </p>
                    </div>
                </div>
                <div class=" hover-overlay ripple rounded-0" data-mdb-ripple-color="light">
                    <img class="img-fluid" src="./images/<?php echo $supplementss->imgSupp; ?>" width="100%" height="50%" alt="Card image cap" />
                    <a href="#">
                        <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                    </a>
                </div>
                <div class="card-body">
                    <p class="card-text collapse" id="collapseContent">
                        <?php echo $supplementss->bodySupp ?>
                    </p>
            </div>
                <div class="card-footer">
                    <a id="readMore" class="btn btn-link link-dark p-md-1 my-1" data-mdb-toggle="collapse" href="views/crud/read/ReadSUPP.php?id=<?php echo $supplementss->idSupp; ?>"" role="button" aria-expanded="false" aria-controls="collapseContent">Read more</a>
                    <?php
                    if (isset($_SESSION["username"]) && $_SESSION["username"] === 'adminadmin') {
                        echo '<button class="btn btn-dark btn-block"><a href="EditSupplements.php?id=' . $supplementss->idSupp . '">Edit</a></button>';
                        echo '<button class="btn btn-dark btn-block"><a href="DeleteSupp.php?id=' . $supplementss->idSupp . '">Delete</a></button>';
                    }
                    ?>
                </div>
            </div>

        </section>

    <?php endforeach; ?>
</div>

<?php if (isset($_SESSION["username"]) && $_SESSION["username"] === 'adminadmin') {

    ?>
    <button type="submit" name="addSuppButton"  id ="btn3" class="btn btn-secondary">AddSupp</button>
        <div class="form-outline">
            <form id="form3" method="POST">
                <?php
                if(isset($checkFormSupp))  {
                    echo  '<div class="error">' . $checkFormSupp . '</div>';
                }
                ?>
                <label class="form-label p-3" for="textAreaExample1"><strong>Title:</strong></label>
                <textarea class="form-control p-4" id="textAreaExample1" rows="5" name="titleSupp"></textarea>
                <label class="form-label p-3 " for="textAreaExample2"><strong>Content:</strong></label>
                <textarea class="form-control p-4 w-100" id="textAreaExample2" rows="15" name="bodySupp"></textarea>
                <label class="form-label p-3" for="img"><strong>IMG:</strong></label>
                <input  type="file" id="img" class="form-control" name="imgSupp" Value="upload">
                <button class="p-2  m-3 align-content-end d-flex" name="sendSupp" type="submit">Add</button>
            </form>
        </div>


<?php } ?>

</body>
<script

    src="form.js">
</script>

</html>
<?php include("footer.php");?>