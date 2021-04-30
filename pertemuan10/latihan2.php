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

$anime = query("SELECT * FROM anime");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Anime</title>
</head>

<body>
  <h3>Daftar Anime</h3>

  <table border="1" cellpadding="10" cellspacing="0">

    <tr>
      <th>#</th>
      <th>Judul</th>
      <th>gambar</th>
      <th>Nama</th>
      <th>Skill</th>
      <th>aksi</th>
    </tr>
    <?php $i = 1;
    foreach ($anime as $an) : ?>
      <tr>
        <td><?= $i++ ?></td>
        <td><img src="img/<?= $an['gambar']; ?>"></td>
        <td><?= $an['judul']; ?></td>
        <td><?= $an['nama']; ?></td>
        <td><?= $an['skill']; ?></td>
        <td>
          <a href="">ubah</a> | <a href="">hapus</a>
        </td>
      </tr>
    <?php endforeach; ?>
  </table>
</body>

</html>