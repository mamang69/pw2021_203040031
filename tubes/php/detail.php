<?php
if (!isset($_GET['id'])) {
  header("location: ../index.php");
  exit;
}

require 'functions.php';

$id = $_GET['id'];
$paint = query("SELECT * FROM paint WHERE id = $id")[0];

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="../css/detail.css">
  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <title>Document</title>
</head>

<body>

  <div class="row">
    <div class="col s7 push-s5"><span class="flow-text">This div is 7-columns wide on pushed to the right by 5-columns.</span></div>
    <div class="col s5 pull-s7"><span class="flow-text">5-columns wide pulled to the left by 7-columns.</span></div>
  </div>

  <div class="container">
    <div class="gambar">
      <img src="../aset/img/<?= $paint["img"]; ?>">
    </div>

    <div class="list2"></div>

    <div class="list">
      <h1><?= $paint["judul"]; ?></h1>
      <ul>
        <h3><?= $paint["harga"]; ?></h3>
        <li><?= $paint["deskripsi"]; ?></li>
      </ul>
    </div>
    <button id="back"><a href="../index.php"><span>BACK</span></a></button>
  </div>
</body>

</html>