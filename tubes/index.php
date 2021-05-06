<?php

require 'php/functions.php';

$paint = query("SELECT *FROM paint")

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
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection" />
</head>

<body>

  <nav class=" teal accent-4" role="navigation">
    <div class="nav-wrapper container">

      <a id="logo-container" href="#" class="brand-logo">Mamang'shOp</a>

      <ul class="right hide-on-med-and-down">
        <li><a href="php/login.php">Login</a></li>
      </ul>


      <ul class="right hide-on-med-and-down">
        <li><a href="php/registrasi.php">register</a></li>
      </ul>


      <ul id="nav-mobile" class="sidenav">
        <li><a href="#">Navbar Link</a></li>
      </ul>



      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
  </nav>

  <div class="slider">
    <ul class="slides">
      <li>
        <img src="aset/anos.png"> <!-- random image -->
        <div class="caption center-align">
          <h3>This is our big Tagline!</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
      <li>
        <img src="aset/aya.jpg"> <!-- random image -->
        <div class="caption left-align">
          <h3>Left Aligned Caption</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
      <li>
        <img src="aset/gil.jpg"> <!-- random image -->
        <div class="caption right-align">
          <h3>Right Aligned Caption</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
      <li>
        <img src="aset/jin.jpg"> <!-- random image -->
        <div class="caption center-align">
          <h3>This is our big Tagline!</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
    </ul>
  </div>
  <div class="container">
    <div class="section">

      <!--   Icon Section   -->

      <div class="row">
        <?php foreach ($paint as $pt) : ?>
          <a href="php/detail.php?id=<?= $pt['id']; ?>">
            <div class="col s12 m6 l3">
              <div class="card">
                <div class="card-image">
                  <img src="aset/img/<?= $pt["img"]; ?>">
                </div>
                <div class="card-content">
                  <p style="color: black;"> <span style="font-weight: bold;"> <?= $pt["judul"]; ?> </span> </p>
                  <p style="color: #26a69a;"> <span style="font-weight: bold; font-color: blue;"> <?= $pt["harga"]; ?></p> </span>
                </div>

              </div>
            </div>
          <?php endforeach; ?>
          </a>
      </div>
    </div>
  </div>


  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <h5 class="header col s12 light">A modern responsive front-end framework based on Material Design</h5>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="aset/img/alatlukis.png"></div>
  </div>

  <footer class="page-footer teal">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Company Bio</h5>
          <p class="grey-text text-lighten-4"> Lorem, ipsum dolor sit amet
            consectetur adipisicing elit. Illum, reiciendis itaque quia sapiente recusandae perferendis.
            Eveniet repellat adipisci, molestias delectus quod rerum, alias, porro odio non odit eius soluta accusantium. </p>


        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Settings</h5>
          <ul>
            <li><a class="white-text" href="#!">Link 1</a></li>
            <li><a class="white-text" href="#!">Link 2</a></li>
            <li><a class="white-text" href="#!">Link 3</a></li>
            <li><a class="white-text" href="#!">Link 4</a></li>
          </ul>
        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Connect</h5>
          <ul>
            <li><a class="white-text" href="#!">Link 1</a></li>
            <li><a class="white-text" href="#!">Link 2</a></li>
            <li><a class="white-text" href="#!">Link 3</a></li>
            <li><a class="white-text" href="#!">Link 4</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer">
      <div class="container">
        Mamang' <a class="brown-text text-lighten-3" href="http://materializecss.com">shOp</a>
      </div>
    </div>
  </footer>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
  <script>
    const sidenav = document.querySelectorAll('.sidenav');
    M.Sidenav.init(sidenav);
  </script>

  <script>
    const slider = document.querySelectorAll('.slider');
    M.Slider.init(slider, {
      indicators: false,
      height: 460,
      transition: 200,
      interval: 3000
    });
  </script>

</body>

</html>