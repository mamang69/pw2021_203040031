<!-- 
Nama : Eldi Anugrah Pratama
NRP : 203040031
Praktikum : Rabu pukul 09:00 - 10:00 WIB
-->
<?php
    function tumpukanBola($tumpukan) {
        for ($x = 1; $x <= $tumpukan; $x++) {
            for ($j = 1; $j <= $x; $j++) {
              echo "<div class='bola'>$x </div>";
            }
            
          echo "<br>";
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
    <style>
        .bola {
            width: 60px;
            height: 60px;
            display: table-cell;
            text-align: center;
            vertical-align: middle;
            border:1px solid black;
            border-radius: 50%; 
            background: pink;
        }
    </style>
</head>
<body>

<?php tumpukanBola(5) ?>

</body>
</html>