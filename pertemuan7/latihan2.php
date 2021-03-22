<?php 
/*
Eldi Anugrah Pratama
203040031
https://github.com/IsmailFikri12/pw2021_203040008
pertemuan 7 - 22 Maret 2021
mempelajari mengenai GET and POST
*/
?> 
<?php
// cek apakah tidak ada data di $_GET
if ( !isset($_GET["judul"]) || 
        !isset($_GET["nama"]) || 
        !isset($_GET["skill"]) ||
        !isset($_GET["gambar"]) ) {
    // redirect
    header("Location: latihan1.php");
    exit;
}
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
    
        <ul>
            <li><img src="img/<?= $_GET["gambar"]; ?>" alt=""></li>
            <li><?= $_GET["judul"]; ?></li>
            <li><?= $_GET["nama"]; ?></li>
            <li><?= $_GET["skill"]; ?></li>
            
        </ul>

        <a href="latihan1.php">Kembali ke Daftar Anime</a>
</body>
</html>