<!-- 
Nama : Eldi Anugrah Pratama
NRP : 203040031
Praktikum : Rabu pukul 09:00 - 10:00 WIB
-->
<?php 
	$pemain = [
	    "Cristiano Ronaldo" => "Juventus",
        "Lionel Messi" => "Barcelona",
        "Luca Modric" => "Ral Madrid",
        "Mohammad Salah" => "Liverpool",
        "Neymar Jr" => "Paris Saint Germain",
        "Sadio Mane" => "Liverpool",
        "Zlatan Ibrahimovic" => "AC Milan"
    ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Latihan3 C</title>
    <style>
    .border {
        font-size: 17px;
        border: 2px solid black;
        padding: 5px;
        width: 37%;
        font-family: arial;
    }
    </style>
</head>
<body>

    <div class="border">
        <h2>Daftar pemain bola terkenal Dan Clubnya</h2>
        <table>
            <?php foreach($pemain as $pm=> $tim) : ?>
                <td><b><?= $pm; ?></b></td>
                <td>:</td>
                <td><?= $tim; ?></td>
                <tr></tr>
            <?php endforeach; ?>
        </table>
    </div>
</body>
</html>