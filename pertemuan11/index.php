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

//ketika tombol klik diklik
if (isset($_POST['cari'])) {
  $anime = cari($_POST['keyword']);
}


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

  <a href="tambah.php">Tambah Data</a>
  <br><br>

  <form action="" method="POST">
    <input type="text" name="keyword" size="40" placeholder="masukan keyword" autocomplete="off" autofocus>
    <button type="submit" name="cari">Cari</button>
  </form>
  <br>

  <table border="1" cellpadding="10" cellspacing="0">

    <tr>
      <th>#</th>
      <th>gambar</th>
      <th>Nama</th>
      <th>aksi</th>
    </tr>

    <?php if (empty($anime)) : ?>
      <tr>
        <td colspan="4">
          <p style="color:red; font-style: italic;">Anime tidak ada !</p>
        </td>
      </tr>
    <?php endif; ?>

    <?php $i = 1;
    foreach ($anime as $an) : ?>
      <tr>
        <td><?= $i++ ?></td>
        <td><img src="img/<?= $an['gambar']; ?>"></td>
        <td><?= $an['nama']; ?></td>
        <td>
          <a href="detail.php?id=<?= $an['id']; ?>">lihat detail</a>
        </td>
      </tr>
    <?php endforeach; ?>
  </table>
</body>

</html>