<?php
session_start();

if (!isset($_SESSION['login'])) {
  header("Location: php/login.php");
  exit;
}

require 'php/functions.php';

$paint = query("SELECT * FROM paint");


if (isset($_POST['cari'])) {
  $paint = cari($_POST['keyword']);
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="icon" href="aset/img/palet.png">
  <title>Mamang's Paint Shop</title>


  <!-- CSS  -->

  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection" />
</head>

<body id="home" class="scrollspy">
  <!---Nav----->
  <nav class=" teal accent-4" role="navigation">
    <div class="nav-wrapper container">

      <a id="logo-container" href="#home" class="brand-logo">Mamang'shOp</a>

      <ul class="right hide-on-med-and-down">
        <li><a href="php/logout.php">logout</a></li>
      </ul>

      </ul>
      <ul id="nav-mobile" class="sidenav">
        <li><a href="#">Navbar Link</a></li>
      </ul>


      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
  </nav>

  <!--slider-->
  <div class="slider">
    <ul class="slides">
      <li>
        <img src="aset/img/f.png">
        <div class="caption center-align">
          <h3>Rumah kalian terkesan sepi?</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
      <li>
        <img src="aset/img/ff.png">
        <div class="caption left-align">
          <h3>Ingin memiliki dekorasi berseni dengan harga yang pas? </h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
      <li>
        <img src="aset/img/fff.png">
        <div class="caption rigt-align">
          <h3>Mamang's Solusinya !</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
    </ul>
  </div>


  <!---- searching---->
  <div class="cari">
    <form action="" method="POST">
      <input type="text" name="keyword" size="40" placeholder="masukan keyword" autocomplete="off" autofocus class="keyword">
      <button type="submit" name="cari" class="tombol-cari">Cari!</button>
    </form>
  </div>
  <br>


  <!--   Icon Section   -->
  <div class="kontener">
    <div class="container">
      <div class="section">
        <div class="row">
          <?php foreach ($paint as $pt) : ?>
            <a href="php/detail.php?id=<?= $pt['id']; ?>">
              <div class="col m6 l3">
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
  </div>

  <!-- Paralax -->
  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <h5 class="header col s12 light">Mamang'shOp the best decorations shop</h5>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="aset/img/alatlukis.png"></div>
  </div>

  <!---Footer--->
  <footer class="page-footer teal">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Company Bio</h5>
          <p class="grey-text text-lighten-4"> Kami adalah toko online shop yang menjual lukisan dan hiasan hiasan berseni yang dibuat oleh pelukis yang handal. </p>
        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Settings</h5>
          <ul>
            <li><a class="white-text" href="#home">home</a></li>

          </ul>
        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Connect</h5>
          <ul>
            <li><a class="white-text" href="https://www.instagram.com/mamangeldi69/?hl=id">Follow our leader instagram 1</a></li>
            <li><a class="white-text" href="https://www.youtube.com/channel/UCY7SYuhsM4LgvDz3rm2z4Kw">Subscribe our leader youtube</a></li>

          </ul>
        </div>
      </div>
    </div>
    <div class="footer">
      <div class="container">
        Mamang' <a class="brown-text text-lighten-3">shOp</a>
      </div>
    </div>
  </footer>
  <!--  Scripts-->
  <script type="text/javascript" src="js/materialize.min.js"></script>
  <script type="text/javascript" src="js/script.js"></script>
  <script>
    const sidenav = document.querySelectorAll('.sidenav');
    M.Sidenav.init(sidenav);
  </script>

  <script>
    const slider = document.querySelectorAll('.slider');
    M.Slider.init(slider, {
      indicators: false,
      height: 460,
      transition: 600,
      interval: 3000
    });

    const parallax = document.querySelectorAll('.parallax');
    M.Parallax.init(parallax);

    const scroll = document.querySelectorAll('.scrollspy');
    M.ScrollSpy.init(scroll, {
      scrollOffset: 50
    });
  </script>

</body>

</html>