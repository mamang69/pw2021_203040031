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
//array
//variable yang memiliki banyak nilai
//elemen pada array boleh memiliki tipe data yang berbeda
//pasangan antara key dan value
//key-nya adalah index ,yang dimulai dari 0

//membuat array
//cara lama

$hari= array("senin","selasa","rabu");

// cara baru
$bulan= ["januari","febuari","maret"];
$arr1=[123,"tulisan",false];

//menampilkan array
//var_dumb() / print_r()
// var_dump($hari);
// echo "<br>";
// print_r($bulan);
// echo "<br>";

//meanmpilkan 1 elemen pada aray
// echo $arr1[0]; 
// echo "<br>";
// echo $bulan[1]

//menambahkan elemen baru pada array
var_dump($hari);
$hari[] = "kamis";
$hari[] = "jum'at";
echo "<br>";
var_dump($hari);


?>