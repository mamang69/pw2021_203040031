<!-- 
Nama : Eldi Anugrah Pratama
NRP : 203040031
Praktikum : Rabu pukul 09:00 - 10:00 WIB
-->
<?php 
$paint = [
    [
        "judul" => "Color Of Depression",
        "harga" => "$5",
        "gambar" => "depression.png",
        "Description" => "The color of my soul when i'm depression",
        "stok" => "Terbatas"
    ],

    [
        "judul" => "Flowers",
        "harga" => "$6",
        "gambar" => "flower.png",
        "Description" => "Flowers in the center of the house",
        "stok" => "Terbatas"
    ],

    [
        "judul" => "Ghost Town",
        "harga" => "$8",
        "gambar" => "ghost.png",
        "Description" => "An abandoned city",
        "stok" => "Terbatas"
    ],

    [
        "judul" => "Sunset Forest",
        "harga" => "$8",
        "gambar" => "sunset.png",
        "Description" => "Sunset view in the forest",
        "stok" => "Terbatas"
    ],

    [
        "judul" => "The Ocean",
        "harga" => "$8",
        "gambar" => "ocean.png",
        "Description" => "Boat on the ocean",
        "stok" => "Terbatas"
    ],

    [
        "judul" => "Sunrise Forest",
        "harga" => "$8",
        "gambar" => "forest.png",
        "Description" => "Sunrise view in the forest",
        "stok" => "Terbatas"
    ],
 
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <style>
        span {
            
            font-family: arial;
            border: 1px solid silver;
            border-radius:25px;
            padding: 5px;
            background-color: WhiteSmoke;
            font-weight: bold;    
        }

        table, td, th{
	        border: 1px solid silver;
	        border-collapse: collapse;
	        padding: 5px;
            text-align:center;
	    }
    </style>

    <title>Mamang's</title>
</head>
<body>
        

    <div class="table-responsive">
        <table class="table">
            <tr class="table-white">
                <th style="background-color:Snow;">No</th>
                <th style="background-color:WhiteSmoke;">Picture</th>
                <th style="background-color:WhiteSmoke;">Title</th>
                <th style="background-color:MintCream;">Price</th>
                <th style="background-color:SeaShell;">Description</th>
                <th style="background-color:WhiteSmoke;">Stock</th>
            </tr>
            <?php $i = 1 ?>
            <?php foreach ( $paint as $pict ) : ?>
                <tr>
                    <td style="background-color:Snow;"><?= $i; ?></td>
                    <td style="background-color:WhiteSmoke;"><img src="img/<?= $pict["gambar"]; ?>" alt=""></td>
                    <td style="background-color:WhiteSmoke;"><?= $pict["judul"]; ?></td>
                    <td style="background-color:MintCream;"><?= $pict["harga"]; ?></td>
                    <td style="background-color:SeaShell;"> <span> <?= $pict["Description"]; ?></span></td>
                    <td style="background-color:WhiteSmoke;"><?= $pict["stok"]; ?></td>
                </tr>
            <?php $i++; ?>
            <?php endforeach; ?>
        </table>
    </div>
</body>
</html>