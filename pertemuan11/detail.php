<?php
/*
Eldi Anugrah Pratama
203040031
https://github.com/mamang69/pw2021_203040031
Pertemuan 10 - 29 April 2021
Koneksi DB & Insert Data
*/
?>


<?php
require 'functions.php';

//ambil url
$id = $_GET['id'];
//auery berdasarkan id
$an = query("SELECT * FROM anime WHERE id = $id");


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail Anime</title>
</head>

<body>
  <h3>Detail Anime</h3>
  <ul>
    <li><img src="img/<?= $an['gambar']; ?>"></li>
    <li>judul : <?= $an['judul']; ?></li>
    <li>nama : <?= $an['nama']; ?></li>
    <li>skill : <?= $an['skill']; ?></li>
    <li><a href="ubah.php?id=<?= $an['id']; ?>">ubah</a> | <a href="hapus.php?id=<?= $an['id']; ?>" onclick="return confirm ('apakah anda yakin?');">hapus</a> </li>
    <a href="index.php?id=<?= $an['id']; ?>">kembali </a>
  </ul>
</body>

</html>