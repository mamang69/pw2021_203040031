<?php 
/*
Eldi Anugrah Pratama
203040031
https://github.com/mamang69/pw2021_203040031
pertemuan 7 - 22 Maret 2021
mempelajari mengenai GET and POST
*/
?> 

<?php
// variabel Scope / Lingkup variabel
// $x = 10;

// function tampilx() {
//     global $x;
//     echo $x;
// }

// tampilx();
// ?>

<?php
// SUPERGLOBALS
// variabel global milik PHP
// merupakan array Associative
// echo $_SERVER["SERVER_NAME"];
?>

<?php
// $_GET
$char = [
    [
        "judul" => "Tensura",
        "nama" => "Rimuru Tempest",
        "skill" => "Turn Null",
        "gambar" => "rim.png"
    ],
    [
        "judul" => "Jujutsu Kaisen",
        "nama" => "Gojo Satoru",
        "skill" => "Six Eye",
        "gambar" => "gojo.jpg"
        
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>
<body>
    <h1>Daftar Anime</h1>

    <ul>
    <?php foreach( $char as $ch ) : ?>
        <li>
            <a href="latihan2.php?judul= <?= $ch["judul"]; ?>
            &nama=<?= $ch["nama"]; ?>
            &skill=<?= $ch["skill"]; ?>
            &gambar=<?= $ch["gambar"]; ?>"><?= $ch["judul"]; ?> </a>
        </li>
    <?php endforeach; ?>
    </ul>
</body>
</html>