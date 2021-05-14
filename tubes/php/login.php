<?php
session_start();

if (isset($_SESSION['login'])) {
  header("Location: ../index.php");
  exit;
}

require 'functions.php';

// ketika tombol login ditekan
if (isset($_POST['login'])) {
  $login = login($_POST);
}
?>

<!DOCTYPE html>
<html>

<head>
  <title>Login Form</title>
  <link rel="stylesheet" type="text/css" href="../css/login.css">
  <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="../aset/img/palet.png">
</head>

<body>
  <img class="wave2" src="../aset/img/wave2svg.svg">
  <img class="wave" src="../aset/img/wave.svg">
  <div class="container">
    <div class="img">
      <img src="../aset/img/palet.png">
    </div>
    <div class="login-content">
      <form action="" method="POST">
        <?php if (isset($login['error'])) : ?>
          <p style="color: red; font-style: italic;"><?= $login['pesan']; ?></p>
        <?php endif; ?>
        <h2 class="title">Welcome</h2>
        <div class="input-div one">
          <div class="i">
          </div>
          <div class="div">
            <h5>Username</h5>
            <input type="text" class="input" name="username" autofocus autocomplete="off" required>
          </div>
        </div>
        <div class="input-div pass">
          <div class="i">
          </div>
          <div class="div">
            <h5>Password</h5>
            <input type="password" class="input" name="password" required>
          </div>
        </div>
        <a href="registrasi.php">Belum punya akun? registrasi sekarang</a>
        <input type="submit" class="btn" value="Login" name="login">
      </form>
    </div>
  </div>
  <script type="text/javascript" src="../js/login.js"></script>
</body>

</html>