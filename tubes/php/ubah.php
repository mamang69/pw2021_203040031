<?php
session_start();

if (!isset($_SESSION['ladmin'])) {
  header("Location: admin.php");
  exit;
}

require 'functions.php';


if (!isset($_GET['id'])) {
  header("location : admin.php");
  exit;
}


$id = $_GET['id'];


$paint = query("SELECT * FROM paint WHERE id=$id");



if (isset($_POST['ubah'])) {
  if (ubah($_POST) > 0) {
    echo "<script>
    alert('data berhasil diubah');
    document.location.href = 'admin.php';
    </script>";
  } else {
    echo " data gagal diubah";
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

  <title>My Shop</title>
</head>

<body>
  <div class="container">

    <h3>Form Ubah Data </h3>

    <form action="" method="POST">
      <input type="hidden" name="id" id="id" value="<?= $paint['id']; ?>">
      <ul>
        <li>
          <label for="img">Img :</label><br>
          <input type="text" name="img" id="img" required value="<?= $paint['img']; ?>"><br><br>
        </li>
        <li>
          <label for="judul">Judul :</label><br>
          <input type="text" name="judul" id="judul" require value="<?= $paint['judul']; ?>"><br><br>
        </li>
        <li>
          <label for="harga">Harga :</label><br>
          <input type="text" name="harga" id="harga" require value="<?= $paint['harga']; ?>"><br><br>
        </li>
        <li>
          <label for="deskripsi">deskripsi :</label><br>
          <input type="text" name="deskripsi" id="deskripsi" require value="<?= $paint['deskripsi']; ?>"><br><br>
        </li>
        <li>
          <label for="stok">Stok :</label><br>
          <input type="text" name="stok" id="stok" require value="<?= $paint['stok']; ?>"><br><br>
        </li>
        <br>
        <button type="submit" name="ubah">Ubah Data !</button>
        <button type="submit">
          <a href="admin.php" style="text-decoration: none; color: black;">Kembali</a>
        </button>
      </ul>
    </form>
  </div>

</body>

</html>