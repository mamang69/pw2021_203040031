<?php 
/*
Eldi Anugrah Pratama
203040031

pertemuan 6 - 12 Maret 2021
mempelajari ASSOCIATIVE Array
*/
?> 

<?php
// $mahasiswa = [
//     ["Eldi Anugrah", "203040031", "203040031@mail.unpas.ac.id", "Teknik Informatika"],
//     ["Mamang", "203040013", "203040000@mail.unpas.ac.id", "Teknik Industri"]
// ];

// Array Associative
// definisinya sama seperti array numerik, kecuali
// key-nya adalah string yang kita buat sendiri

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
    [
        "judul" => "Nanatsu no Taizai", 
        "nama" => "Meliodas",
        "gambar" => "meli.jpg",
        "Skill" => "Assault Mode"
    ],
    [
        "judul" => "Magi: The Labyrinth of Magic", 
        "nama" => "Sinbad",
        "gambar" => "sin.jpg",
        "Skill" => "DJin Equipment"
    ],
    [
        "judul" => "One Punch Man", 
        "nama" => "Saitama",
        "gambar" => "sai.jpg",
        "Skill" => "Serious Punch"
    ],
    [
        "judul" => "Class Room Elite", 
        "nama" => "Kiyotaka Ayanokoji",
        "gambar" => "aya.jpg",
        "Skill" => "Super Human"
    ],
    [
        "judul" => "Maou Gakuin Futekigosha", 
        "nama" => "Anos Voldigoad",
        "gambar" => "anos.png",
        "Skill" => "Sword Derstoyer"
    ],
    [
        "judul" => "Fate/grand Order", 
        "nama" => "Gilgamesh",
        "gambar" => "gil.jpg",
        "Skill" => "Enuma Elish"
    ],
    [
        "judul" => "God Of High School", 
        "nama" => "Jin Mori",
        "gambar" => "jin.jpg",
        "Skill" => "Yeoui"
    ],
    [
        "judul" => "Mondaiji-tachi ga Isekai kara Kuru Sou Desu yo", 
        "nama" => "Izayoi Sakamaki ",
        "gambar" => "iza.png",
        "Skill" => "Unkwon"
    ]
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Anime</title>
</head>
<body>
    
    <h1>10 Karakter Over Power</h1>

    <?php foreach( $character as $char ) : ?>
    <ul>
        <li>
            <img src="img/<?= $char["gambar"]; ?>">
        </li>
        <li>Judul : <?php echo $char["judul"]; ?></li>
        <li>Nama : <?php echo $char["nama"]; ?></li>
        <li>Skill : <?php echo $char["Skill"]; ?></li>
       

     
    </ul>
    <?php endforeach; ?>


</body>
</html>