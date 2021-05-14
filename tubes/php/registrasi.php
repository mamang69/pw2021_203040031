<?php
require 'functions.php';

if (isset($_POST['registrasi'])) {
  if (registrasi($_POST) > 0) {
    echo "<script>
            alert('user baru berhasil ditambahkan. silahkan login!');
            document.location.href = 'login.php';
          </script>";
  } else {
    echo 'user gagal ditambahkan!';
  }
}
?>

<!DOCTYPE html>
<html>

<head>
  <title>registrasi Form</title>
  <link rel="stylesheet" type="text/css" href="../css/registrasi.css">
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
            <input type="password" class="input" name="password1" required>
          </div>
        </div>
        <div class="input-div pass">
          <div class="i">
          </div>
          <div class="div">
            <h5>Konfirmasi Password</h5>
            <input type="password" class="input" name="password2" required>
          </div>
        </div>
        <a href="login.php">Sudah punya akun? login sekarang</a>
        <input type="submit" class="btn" value="registrasi" name="registrasi">
      </form>
    </div>
  </div>
  <script type="text/javascript" src="../js/login.js"></script>
</body>

</html>