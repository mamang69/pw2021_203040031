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
// $_GET
$character = [
    [
        "judul" => "Tensei Shitara Slime Datta Ken", 
        "nama" => "Rimuru Tempest",
        "gambar" => "rim.png",
        "Skill" => "Turn null"
    ],
    [
        "judul" => "Jujutsu Kaisen", 
        "nama" => "Gojo Satoru",
        "gambar" => "gojo.jpg",
        "Skill" => "Infinity"
    ],
    
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
<h1>Char OP</h1>
<ul>
    <?php foreach( $character as $char ) : ?>
        <li>
            <a href="latihan2.php?judul=<?=$char["judul"];?>"><?=$char["judul"];?></li></a>
    <?php endforeach; ?>

</ul>
</body>
</html>