<?php
session_start();

if (!isset($_SESSION['ladmin'])) {
  header("Location: admin.php");
  exit;
}


require 'functions.php';

//cek apakah tombol tambah telah ditekan

if (isset($_POST['tambah'])) {
  if (tambah($_POST) > 0) {
    echo "<script>
    alert('data berhasil ditambahkan');
    document.location.href = 'admin.php';
    </script>";
  } else {
    echo " data gagal ditambahkan";
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" href="../pw2021_203040008/latihan4b/css/style.css">
  <link rel="icon" href="../aset/img/palet.png">
</head>

<body>
  <div class="container">
    <h3>Form Tambah Data</h3>
    <form action="" method="POST" enctype="multipart/form-data">
      <ul>
        <li>
          <label>
            judul :
            <input type="text" name="judul" autofocus required>
          </label>
        </li>
        <li>
          <label>
            harga :
            <input type="text" name="harga" required>
          </label>
        </li>
        <li>
          <label>
            deskripsi :
            <input type="text" name="deskripsi" required>
          </label>
        </li>
        <li>
          <label>
            stok :
            <input type="text" name="stok" required>
          </label>
        </li>
        <li><br>
          <label>
            gambar :
            <input type="file" name="img" class="img" onchange="previewImage()">
          </label>
          <img src="../aset/img/nopoto.png" width="120" style="display:block;" class="img-preview">
        </li><br>
        <li>
          <button type="submit" name="tambah"> Tambah data</button>
        </li>
      </ul>

    </form>
    <script src="../js/script.js"></script>
</body>

</html>