<?php

session_start();

//SPRAWDZA CZY ZMIENNA JEST W SESJI !
include_once("Main.php");
require_once('config.php');
$connection = mysqli_connect("localhost", "root", "", "gymweb");
$fail_send = false;
$_SESSION["pplWorkout"] = $pplW;
$errorTIT = "";
$errorPRO = "";
$errorIMG = "";

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

    $sql = "SELECT * FROM `recomennded`";
    $rs = mysqli_query($connection, $sql);
    while ($row = mysqli_fetch_array($rs)) {
    ?>
      <div class="card text-center w-25 h-50 card-group p-2 m-5 " style="width: 18rem;">
        <div class="card-header">
          <img src="./images/<?php echo $row['img'] ?>" class="card-img-center img-fluid">
          <p><?php echo $row['id'] ?> </p>
        </div>
        <div class="col-md-8 ">
          <div class="card-body ">
            <form method="POST" action="">
              <input id="prog" name="prog" type="submit" class="btn btn-primary" value="<?php echo $row['title'] ?>"></input>
            </form>
            <p class="card-text text-warning"><?php echo substr($row['programms'], 0, 100) ?> ... </p>

          </div>
        </div>
      </div>
    <?php
    }
  }
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {


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



      echo "doda??es program !";
      $sql = "INSERT INTO `recomennded` (`id`,`programms`, `title`,`img`, `idCard`) VALUES ('', '$programms', '$title' , '$img', '$idCards')";
      $rs = mysqli_query($connection, $sql);
    }
  }
}
if (isset($_POST["prog"])) {
  $row[`idCard`] = $idCards;
  $sql = "SELECT `img`, `title`, `programms` FROM `recomennded` WHERE `idCard` = '$idCards'";
  $rs =  mysqli_query($connection, $sql);

  while ($row = mysqli_fetch_array($rs)) {
    ?>
    <img src="./images/<?php echo $row['img'] ?>" class="img-fluid">
    <h1 class="text-primary"> <?php echo $row['title'] ?></h1>
    <span class="wrap"><?php echo $row["programms"] ?> </span>

<?php

  }
  var_dump($sql);
}
?>
<?php if (isset($_POST["Carb"])) {
?>

  <form method="POST">
    <button class="btn btn-primary m-4" type="button" id="button">AddDiet</button>
    <div id="title" class="form-floating-mb-3" style="display:none">
      <input name="title" type="text" class="form-control" id="title" placeholder="Title" style="width:50%;">
      <span class="error">* <?php echo $errorTIT; ?></span>
    </div>
    <div id="img" class="form-floating-mb-3" style="display:none">
      <input name="img" type="file" class="form-control" id="img" Value="upload" style="width:50%;">
      <span class="error">* <?php echo $errorPRO; ?></span>
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
}
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
  <meta name=???viewport??? content="width=device-width, initial-scale=1.0">
  <link rel=???stylesheet??? href=???css/bootstrap.css???>
  <link rel=???stylesheet??? href=???css/bootstrap-responsive.css???>
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