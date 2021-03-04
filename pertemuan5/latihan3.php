<?php
/*
Eldi Anugrah Pratama
203040031
https://github.com/mamang69/pw2021_203040031
Pertemuan5 - 2 maret 2021
mempelajari sintak PHP
*/
?>
<?php
 $mahasiswa = [
     ["Mamang Eldi","20304696969","Teknik Infirmatika","elditamvan15@gmail.com"],
     ["Eldi Anugrah","203040031","Teknik Infirmatika","203040031@mail.unpas.ac.id"],

 ]; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>

<h1>Daftar Mahasiswa</h1>

<?php foreach ( $mahasiswa as $mhs ) : ?>
<ul>
    <li>Nama :<?=$mhs [0]; ?> </li>
    <li>NRP :<?= $mhs [1]; ?> </li>
    <li>Jurusan :<?=$mhs [2]; ?> </li>
    <li>Email :<?=$mhs [3]; ?> </li>
</ul>
<?php endforeach; ?>






</body>
</html>

