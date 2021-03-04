<!-- 
Eldi Anugrah Pratama
203040031
Rabu pukul 10:00
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1 C</title>

    <style>
        .div {
            background-color: salmon;
            height: 60px;
            width: 60px;
            line-height: 50px;
            text-align: center;
            margin-bottom: 20px;
            margin-right: 20px;
            border-radius: 40px;
            display: inline-block;
            border: 1px solid black;
            font-weight: bold;
        }
    </style>
</head>
<body>

<?php for( $i = 1; $i <= 3; $i++ ) : ?>
    <?php for( $j = 1; $j <= $i; $j++ ) : ?>
        <div class="div"><?= $i ?></div>
    <?php endfor; ?>
    <br>
<?php endfor; ?>

</body>
</html>