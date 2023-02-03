<?php

session_start();

//SPRAWDZA CZY ZMIENNA JEST W SESJI !
include_once("Main.php");
require_once('database/connect.php');
$fail_send = false;
$_SESSION["pplWorkout"] = $pplW;
$errorTIT = "";
$errorPRO = "";
$errorIMG = "";
$fail_sendDiet = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (isset($_POST["pplR"])) {
?>
    <form method="POST">
      <button class="btn btn-primary m-4" type="button" id="button">AddWorkout</button>
      <div id="title" class="form-floating-mb-3" style="display:none">
        <input name="title" type="text" class="form-control" id="title" placeholder="Title">
        <span class="error">* <?php echo $errorTIT; ?></span>
      </div>
      <div id="img" class="form-floating-mb-3" style="display:none">
        <input name="img" type="file" class="form-control" id="img" Value="upload">
        <span class="error">* <?php echo $errorPRO; ?></span>
      </div>

      <div id="idCard" class="form-floating-mb3" style="display:none">
        <input name="idCards" type="text" class="form-control" id="idCards" placeholder="idCard">
      </div>


      <div id="text" style="display:none">
        <label for="programms"></label><br>
        <textarea id="programms" name="programms" rows="15" cols="100" placeholder="Text"></textarea>
        <span class="error">* <?php echo $errorIMG; ?></span>
        <form method="POST">
          <input id="send" name="send" type="submit" value="Add"></input>
        </form>
    </form>
    </div>
    <?php
 $dataBase = new connect();
 $conn = $dataBase ->getConnection();
    $stmt = $conn->prepare("SELECT * FROM recomennded");
    $stmt->execute();
    while ($result = $stmt->fetch()) {
    ?>

      <div class="container">
        <section class="mx-auto my-5" style="max-width: 23rem;">
          <div class="card">
            <div class="card-body d-flex flex-row">
              <img src="./images/admin.webp" class="rounded-circle me-3" height="50px" width="50px" alt="avatar" />
              <div>
                <h5 class="card-title font-weight-bold mb-2"></h5>
                <p class="card-text"><i class="far fa-clock pe-2"></i>
                  <?php
                  echo $result['title'];
                  ?>
                </p>
              </div>
            </div>
            <div class="bg-image hover-overlay ripple rounded-0" data-mdb-ripple-color="light">
              <img class="img-fluid" src="./images/<?php echo $result['img'] ?>" width="100%" height="50%" alt="Card image cap" />
              <a href="#!">
                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
              </a>
            </div>
            <div class="card-body">
              <p class="card-text collapse" id="collapseContent">
                <?php echo $result['programms'] ?>
              </p>
              <div class="d-flex justify-content-between">
                <a id="readMore" class="btn btn-link link-danger p-md-1 my-1" data-mdb-toggle="collapse" href="#collapseContent" role="button" aria-expanded="false" aria-controls="collapseContent">Read more</a>
              </div>
            </div>
          </div>

        </section>
      </div>
      </div>
<?php
exit();
    }
  }
}

if (isset($_POST["send"])) {

  $idCards = $_POST['idCards'];
  $title = $_POST['title'];
  $programms = $_POST['programms'];
  $img = $_POST['img'];

  if (empty($title)) {
    $errorTIT  = "tittle must be required";
    $fail_send = true;
  }

  if (empty($programms)) {
    $errorPRO = " programms must be required";
    $fail_send = true;
  }

  if (empty($img)) {
    $errorIMG = "img is required!";
    $fail_send = true;
  }

  if (!$fail_send) {

    echo "dodałes program !";
    $stmt = $conn->prepare("INSERT INTO `recomennded` (title,img, idCard, programms) VALUES (?, ?, ?,?)");
    $stmt->bindParam(1, $title, PDO::PARAM_STR);
    $stmt->bindParam(2, $img, PDO::PARAM_LOB);
    $stmt->bindParam(3, $idCards, PDO::PARAM_INT);
    $stmt->bindParam(4, $programms, PDO::PARAM_STR);
    $stmt->execute();
  }
}




?>
<?php if (isset($_POST["Carb"])) {
?>


  <form method="POST">
    <button class="btn btn-primary m-4" type="button" id="button">AddDiet</button>
    <div id="title" class="form-floating-mb-3" style="display:none">
      <input name="titleDiet" type="text" class="form-control" id="titleDiet" placeholder="Title" style="width:50%;">
      <span class="error">* <?php echo $errorTIT; ?></span>
    </div>
    <div id="img" class="form-floating-mb-3" style="display:none">
      <input name="imgDiet" type="file" class="form-control" id="imgDiet" Value="upload" style="width:50%;">
      <span class="error">* <?php echo $errorPRO; ?></span>
    </div>

    <div id="text" style="display:none">
      <label for="diets"></label><br>
      <textarea id="diets" name="diets" rows="15" cols="100" placeholder="Text"></textarea>
      <span class="error">* <?php echo $errorIMG; ?></span>
      <form method="POST">
        <input id="sendDiet" name="sendDiet" type="submit" value="sendDiet"></input>
      </form>
  </form>
  </div>


  <?php
    $dataBase = new connect();
    $conn = $dataBase ->getConnection();
  $stmt = $conn->prepare("SELECT * FROM diets");
  $stmt->execute();
  while ($result = $stmt->fetch()) {
  ?>
    <div class="container">
      <section class="mx-auto my-5" style="max-width: 23rem;">
        <div class="card">
          <div class="card-body d-flex flex-row">
            <img src="./images/admin.webp" class="rounded-circle me-3" height="50px" width="50px" alt="avatar" />
            <div>
              <h5 class="card-title font-weight-bold mb-2"></h5>
              <p class="card-text"><i class="far fa-clock pe-2"></i>
                <?php
                echo $result['title'];
                ?>
              </p>
            </div>
          </div>
          <div class="bg-image hover-overlay ripple rounded-0" data-mdb-ripple-color="light">
            <img class="img-fluid" src="./images/<?php echo $result['img'] ?>" width="100%" height="50%" alt="Card image cap" />
            <a href="#!">
              <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
            </a>
          </div>
          <div class="card-body">
            <p class="card-text collapse" id="collapseContent">
              <?php echo $result['diet'] ?>
            </p>
            <div class="d-flex justify-content-between">
              <a class="btn btn-link link-danger p-md-1 my-1" data-mdb-toggle="collapse" href="Diet.php?id=<?php echo $result['id']?>" role="button" aria-expanded="false" aria-controls="collapseContent">Read more</a>
            </div>
          </div>
        </div>

      </section>
    </div>
    </div>

<?php

  }
}
if (isset($_POST["sendDiet"])) {

  $titleDiet = $_POST['titleDiet'];
  $imgDiet = $_POST['imgDiet'];
  $diets = $_POST['diets'];

  if (empty($titleDiet)) {
    $errorTIT  = "tittle must be required";
    $fail_sendDiet = true;
  }

  if (empty($diets)) {
    $errorPRO = " programms must be required";
    $fail_sendDiet = true;
  }

  if (empty($imgDiet)) {
    $errorIMG = "img is required!";
    $fail_sendDiet = true;
  }

  if (!$fail_sendDiet) {
    echo "dodałes program !";
    $stmt = $conn->prepare("INSERT INTO `diets` (title,diet,img) VALUES (?, ?, ?)");
    $stmt->bindParam(1, $titleDiet, PDO::PARAM_STR);
    $stmt->bindParam(2, $diets, PDO::PARAM_STR);
    $stmt->bindParam(3, $imgDiet, PDO::PARAM_LOB);
    $stmt->execute();
  }
}


?>


<?php

?>

<?php



?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" type="text/css" href="Main_style.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <meta name=”viewport” content="width=device-width, initial-scale=1.0">
  <link rel=”stylesheet” href=”css/bootstrap.css”>
  <link rel=”stylesheet” href=”css/bootstrap-responsive.css”>
</head>

<body>

  <script>
    document.getElementById('button').onclick = function() {
      document.getElementById('text').style.display = 'block';
      document.getElementById('title').style.display = 'block';
      document.getElementById('img').style.display = 'block';
      document.getElementById('idCard').style.display = 'block';
    }
  </script>



</body>

</html>