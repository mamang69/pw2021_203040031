<?php
/*
Eldi Anugrah Pratama
203040031
https://github.com/mamang69/pw2021_203040031
Pertemuan 18  mei 2021
upload gambar dan ajax
*/
?>

<?php
session_start();

if (!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}


require 'functions.php';

//cek apakah tombol tambah telah ditekan

if (isset($_POST['tambah'])) {
  if (tambah($_POST) > 0) {
    echo "<script>
    alert('data berhasil ditambahkan');
    document.location.href = 'index.php';
    </script>";
  } else {
    echo " data gagal ditambahkan";
  }
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Data Anime</title>
</head>

<body>
  <h3>Form Tambah Data</h3>
  <form action="" method="POST" enctype="multipart/form-data">
    <ul>
      <li>
        <label>
          judul :
          <input type="text" name="judul" autofocus required>
        </label>
      </li><br>
      <li>
        <label>
          nama :
          <input type="text" name="nama" required>
        </label>
      </li><br>
      <li>
        <label>
          skill :
          <input type="text" name="skill" required>
        </label>
      </li>
      <li><br>
        <label>
          gambar :
          <input type="file" name="gambar" class="gambar" onchange="previewImage()">
        </label>
        <img src="img/nopoto.png" width="120" style="display:block;" class="img-preview">
      </li><br>
      <li>
        <button type="submit" name="tambah"> Tambah data</button>
      </li>
    </ul>

  </form>
  <script src="js/script.js"></script>
</body>

</html>