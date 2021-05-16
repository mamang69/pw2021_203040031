<?php
require '../functions.php';
$anime = cari($_GET['keyword']);
?>
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