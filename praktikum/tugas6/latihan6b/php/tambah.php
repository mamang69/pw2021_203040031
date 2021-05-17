<?php

require 'functions.php';

if (isset($_POST['tambah'])) {
    if (tambah($_POST) > 0) {
        echo "<script>
                alert('Data Berhasil ditambahkan!');
                document.location.href = 'admin.php';
            </script>";
    } else {
        echo "<script>
                alert('Data Gagal ditambahkan!');
                document.location.href = 'admin.php';
            </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>Form Tambah Data Mahasiswa</h3>
    <form action="" method="post">
        <ul>
            <li>
                <label for="img">Img :</label><br>
                <input type="text" name="img" id="img" required><br><br>
            </li>
            <li>
                <label for="judul">Judul :</label><br>
                <input type="text" name="judul" id="judul" required><br><br>
            </li>
            <li>
                <label for="harga">Harga :</label><br>
                <input type="text" name="harga" id="harga" required><br><br>
            </li>
            <br>
            <li>
                <label for="deskripsi">Deskripsi :</label><br>
                <input type="text" name="deskripsi" id="deskripsi" required><br><br>
            </li>
            <li>
                <label for="stok">Stok :</label><br>
                <input type="text" name="stok" id="stok" required><br><br>
            </li>
            <br>
            <button type="submit" name="tambah">Tambah Data!</button>
            <button type="submit">
                <a href="index.php" style="text-decoration: none; color:black;">kembali</a>
            </button>
        </ul>
    </form>
</body>

</html>