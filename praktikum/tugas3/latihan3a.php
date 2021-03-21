<!-- 
Nama : Eldi Anugrah Pratama
NRP : 203040031
Praktikum : Rabu pukul 09:00 - 10:00 WIB
-->
<?php 
    $kata = ["ada", "abel", "men", "pung", "nilai"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 3a</title>
    <style>
        .border {
            font-family: arial;
            border: 1px solid black;
            padding: 11px;
            padding-bottom: 30px;
            margin-right: 68%;
        }
    </style>
</head>
<body>
    
    <?php for( $i = 1; $i <= 1; $i++ ) { ?>
        <div class="border"><?php echo "Array $kata[0]lah suatu vari$kata[1] yang dapat $kata[2]am$kata[3] banyak $kata[4] ";?></div>
    <?php } ?>


</body>
</html>
