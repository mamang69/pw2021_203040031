<?php
require 'functions.php';

if (isset($_POST["register"])) {
  if (registrasi($_POST) > 0) {
    echo "<script>
              alert('Registrasi Berhasil');
              document.location.href = 'login.php';
        </script>";
  } else {
    echo "<script>
              alert('Registrasi Gagal');
        </script>";
  }
}
?>


<form action="" method="POST">
  <table>
    <tr>
      <h2>Buatlah Username dan Passsword</h2>
    </tr>
    <tr>
      <td><label for="username">Username</label></td>
      <td>:</td>
      <td><input type="text" name="username"></td>
    </tr>
    <tr>
      <td><label for="password"><span class="badge bg-success">Password</span></label></td>
      <td>:</td>
      <td><input type="password" name="password"></td>
    </tr>
  </table>
  <button type="submit" name="register">REGISTER</button>
  <div class="login">
    <p>Sudah punya akun ? Login <a href="login.php">Disini</a></p>
  </div>
</form>