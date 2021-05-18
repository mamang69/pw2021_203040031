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

//jika tidak ada id di url
if (!isset($_GET['id'])) {
  header("location : index.php");
  exit;
}

//ambil id dari url
$id = $_GET['id'];

//query anime berdasarkan id
$an = query("SELECT * FROM anime WHERE id=$id");

//cek apakah tombol ubah telah ditekan

if (isset($_POST['ubah'])) {
  if (ubah($_POST) > 0) {
    echo "<script>
    alert('data berhasil diubah');
    document.location.href = 'index.php';
    </script>";
  } else {
    echo " data gagal diubah";
  }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ubah Data Anime</title>
</head>

<body>
  <h3>Form Ubah Data</h3>
  <form action="" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?= $an['id']; ?>">
    <ul>
      <li>
        <label>
          judul :
          <input type="text" name="judul" autofocus required value="<?= $an['judul']; ?>">
        </label>
      </li>
      <li>
        <label>
          nama :
          <input type="text" name="nama" required value="<?= $an['nama']; ?>">
        </label>
      </li>
      <li>
        <label>
          skill :
          <input type="text" name="skill" required value="<?= $an['skill']; ?>">
        </label>
      </li>
      <li>
        <input type="hiden" name="gambar_lama" value="<?= $an['gambar']; ?>">
        <label>
          gambar :
          <input type="file" name="gambar" class="gambar" onchange="previewImage()">
        </label>
        <img src="img/<?= $an['gambar']; ?>" width="120" style="display:block;" class="img-preview">
      </li>
      <li>
        <button type="submit" name="ubah"> Ubah data Anime</button>
      </li>
    </ul>

  </form>
  <script src="js/script.js"></script>
</body>

</html>