<?php
session_start();

if (!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}


require 'functions.php';

//ambil url
$id = $_GET['id'];
//auery berdasarkan id
$paint = query("SELECT * FROM paint WHERE id = $id");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="icon" href="aset/img/palet.png">
  <title>Mamang's Paint Shop</title>


  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="../css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />
  <link href="../css/detail.css" type="text/css" rel="stylesheet" media="screen,projection" />
</head>


<body>

  <nav class=" teal accent-4" role="navigation">
    <div class="nav-wrapper container">

      <a id="logo-container" href="#" class="brand-logo">Mamang'shOp</a>

      <ul id="nav-mobile" class="sidenav">
        <li><a href="#">Navbar Link</a></li>
      </ul>

      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
  </nav>

  <div class="container">
    <div class="section">
      <div class="row">

        <div class="col s12 m12 ">
          <div class="card">
            <div class="card-image">
              <img src="../aset/img/<?= $paint["img"]; ?>">
            </div>
            <div class="card-content">
              <p style="color: black;"> <span style="font-weight: bold;"> <?= $paint["judul"]; ?> </span> </p>
              <br><br><br>
              <p style="color: black;"> <?= $paint["deskripsi"]; ?></p> </span>
              <br>
              <p style="color: #26a69a;"> <span style="font-weight: bold; font-color: blue;"> <?= $paint["harga"]; ?></p> </span>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>

</body>

</html>