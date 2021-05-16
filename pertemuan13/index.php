<?php
/*
Eldi Anugrah Pratama
203040031
https://github.com/mamang69/pw2021_203040031
Pertemuan 12 - 07 mei 2021
registrasi
*/
?>

<?php
session_start();

if (!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}

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
  <a href="logout.php">log out</a>
  <h3>Daftar Anime</h3>

  <a href="tambah.php">Tambah Data</a>
  <br><br>

  <form action="" method="POST">
    <input type="text" name="keyword" size="40" placeholder="masukkan keyword pencarian.." autocomplete="off" autofocus class="keyword">
    <button type="submit" name="cari" class="tombol-cari">Cari!</button>
  </form>
  <br>

  <div class="container">
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
  </div>
  <script src="js/script.js"></script>
</body>

</html>