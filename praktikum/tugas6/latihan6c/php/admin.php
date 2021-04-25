<?php

session_start();
if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit;
}

require 'functions.php';
$paint = query("SELECT * FROM paint");


if (isset($_GET['cari'])) {
    $keyword = $_GET['keyword'];
    $paint = query("SELECT * FROM paint WHERE
            judul LIKE '%$keyword%' OR
            harga LIKE '%$keyword%' OR
            deskripsi LIKE '%$keyword%' OR
            stok LIKE '%$keyword%' ");
} else {
    $pain = query("SELECT * FROM paint");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Mamang's</title>
</head>

<body>
    <div class="logout">
        <a href="logout.php">logout</a>
    </div>

    <div class="add">
        <a href="tambah.php">Tambah Data</a>
    </div>

    <form action="" method="get">
        <input type="text" name="keyword" autofocus>
        <button type="submit" name="cari">Cari</button>
    </form>
    <div class="table-responsive">
        <table class="table">
            <tr class="table-white">
                <th style="background-color:Snow;">No</th>
                <th style="background-color:Snow;">Opsi</th>
                <th style="background-color:WhiteSmoke;">Picture</th>
                <th style="background-color:Snow;">Title</th>
                <th style="background-color:MintCream;">Price</th>
                <th style="background-color:SeaShell;">Description</th>
                <th style="background-color:WhiteSmoke;">Stock</th>
            </tr>

            <?php if (empty($paint)) : ?>
                <tr>
                    <td colspan="7">
                        <h1>lukisan Tidak Ditemukan</h1>
                    </td>
                </tr>
            <?php else : ?>
                <?php $i = 1; ?>
                <?php foreach ($paint as $pt) : ?>
                    <tr>
                        <td><?= $i; ?> </td>
                        <td>
                            <a href="ubah.php?id=<?= $pt['id'] ?>"><button>Ubah</button></a>
                            <a href="hapus.php?id= <?= $pt['id'] ?>" onclick="return confirm ('hapus data??')"><button>Hapus</button></a>
                        </td>

                        <td style="background-color:WhiteSmoke;"><img src="../assets/img/<?= $pt["img"]; ?>" alt=""></td>
                        <td style="background-color:Snow;"><?= $pt["judul"]; ?></td>
                        <td style="background-color:MintCream;"><?= $pt["harga"]; ?></td>
                        <td style="background-color:SeaShell;"> <span> <?= $pt["deskripsi"]; ?></span></td>
                        <td style="background-color:WhiteSmoke;"><?= $pt["stok"]; ?></td>

                    </tr>
                    <?php $i++; ?>
                <?php endforeach; ?>
            <?php endif; ?>
        </table>
    </div>
</body>

</html>