<?php
require 'functions.php';
$paint = cari($_GET['keyword']);
?>

<div class="section">
  <div class="row">
    <?php foreach ($paint as $pt) : ?>
      <a href="php/detail.php?id=<?= $pt['id']; ?>">
        <div class="col m6 l3">
          <div class="card">
            <div class="card-image">
              <img src="aset/img/<?= $pt["img"]; ?>">
            </div>
            <div class="card-content">
              <p style="color: black;"> <span style="font-weight: bold;"> <?= $pt["judul"]; ?> </span> </p>
              <p style="color: #26a69a;"> <span style="font-weight: bold; font-color: blue;"> <?= $pt["harga"]; ?></p> </span>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
      </a>
  </div>

</div>