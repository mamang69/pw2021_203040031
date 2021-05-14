<?php
session_start();

if (!isset($_SESSION['login'])) {
  header("Location: php/login.php");
  exit;
}

require 'php/functions.php';

$paint = query("SELECT * FROM paint");

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
  <!---Nav----->
  <nav class=" teal accent-4" role="navigation">
    <div class="nav-wrapper container">

      <a id="logo-container" href="#" class="brand-logo">Mamang'shOp</a>

      <ul class="right hide-on-med-and-down">
        <li><a href="php/logout.php">logout</a></li>
      </ul>

      <ul class="right hide-on-med-and-down">
        <li><a href="php/Ladmin.php">Login admin</a></li>
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

  <!--   Icon Section   -->
  <div class="container">
    <div class="section">
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
  <!-- Paralax -->
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
        Mamang' <a class="brown-text text-lighten-3">shOp</a>
      </div>
    </div>
  </footer>
  <!--  Scripts-->
  <script type="text/javascript" src="js/materialize.min.js"></script>
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

    const materialbox = document.querySelectorAll('.materialboxed');
    M.Materialbox.init(materialbox);

    const scroll = document.querySelectorAll('.scrollspy');
    M.ScrollSpy.init(scroll, {
      scrollOffset: 50
    });
  </script>

</body>

</html>

<?php if ($cek_user($_SESSION['user']) == 'admin') { ?>
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Mamang's</title>
  </head>

  <body>
    <div class="logout">
      <a href="logout.php">logout</a>
    </div>

    <div class="add">
      <a href="tambah.php">Tambah Data</a>
    </div>

    <form action="" method="get">
      <input type="text" name="keyword" autofocus>
      <button type="submit" name="cari">Cari</button>
    </form>
    <div class="table-responsive">
      <table class="table">
        <tr class="table-white">
          <th style="background-color:Snow;">No</th>
          <th style="background-color:Snow;">Opsi</th>
          <th style="background-color:WhiteSmoke;">Picture</th>
          <th style="background-color:Snow;">Title</th>
          <th style="background-color:MintCream;">Price</th>
          <th style="background-color:SeaShell;">Description</th>
          <th style="background-color:WhiteSmoke;">Stock</th>
        </tr>

        <?php if (empty($paint)) : ?>
          <tr>
            <td colspan="7">
              <h1>lukisan Tidak Ditemukan</h1>
            </td>
          </tr>
        <?php else : ?>
          <?php $i = 1; ?>
          <?php foreach ($paint as $pt) : ?>
            <tr>
              <td><?= $i; ?> </td>
              <td>
                <a href="ubah.php?id=<?= $pt['id'] ?>"><button>Ubah</button></a>
                <a href="hapus.php?id= <?= $pt['id'] ?>" onclick="return confirm ('hapus data??')"><button>Hapus</button></a>
              </td>

              <td style="background-color:WhiteSmoke;"><img src="../aset/img/<?= $pt["img"]; ?>" alt=""></td>
              <td style="background-color:Snow;"><?= $pt["judul"]; ?></td>
              <td style="background-color:MintCream;"><?= $pt["harga"]; ?></td>
              <td style="background-color:SeaShell;"> <span> <?= $pt["deskripsi"]; ?></span></td>
              <td style="background-color:WhiteSmoke;"><?= $pt["stok"]; ?></td>

            </tr>
            <?php $i++; ?>
          <?php endforeach; ?>
        <?php endif; ?>
      </table>
    </div>
  </body>

  </html>
<?php } ?>