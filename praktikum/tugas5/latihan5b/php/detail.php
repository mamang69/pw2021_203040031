<?php

    if (!isset($_GET['id'])) {
        header("location: ../index.php");
        exit;
    }

    require 'functions.php';

    $id = $_GET['id'];

    $paint = query ("SELECT *FROM paint WHERE id = $id" )[0];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="gambar">
            <img src="../assets/img/<?= $paint["img"]; ?>">
        </div>
            <div class="keterangan">
                    <p><?= $paint["judul"]; ?></p>
                    <p><?= $paint["harga"]; ?></p>
                    <p><?= $paint["deskripsi"]; ?></p>
                    <p><?= $paint["stok"]; ?></p>
            </div>

        <button class="tombol-kembali"> <a href="../index.php">Back</a></button>
    </div>
</body>
</html>
