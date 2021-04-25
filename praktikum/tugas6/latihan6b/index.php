<!-- 
Nama : Eldi Anugrah Pratama
NRP : 203040031
Praktikum : Rabu pukul 09:00 - 10:00 WIB
-->
<?php

require 'php/functions.php';

$paint = query("SELECT *FROM paint")
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <a href="php/login.php">
        <button>Masuk ke halaman admin</button>
    </a>
    <a href="php/registrasi.php">
        <button>regist</button>
    </a>
    <title>Document</title>
</head>

<body>
    <div class="container">
        <?php foreach ($paint as $pt) : ?>
            <p class="nama">
                <a href="php/detail.php?id=<?= $pt['id'] ?>">
                    <?= $pt["judul"] ?>
                </a>
            </p>
        <?php endforeach; ?>
    </div>
</body>

</html>