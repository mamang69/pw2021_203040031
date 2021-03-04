    <!---
Eldi Anugrah Pratama
203040031
Rabu 9.00 - 10.00
    --->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1 C</title>

    <style>
        .mamang {
            background-color: salmon;
            height: 40px;
            width: 40px;
            line-height: 40px;
            text-align: center;
            margin-bottom: 20px;
            margin-right: 12px;
            border-radius: 55px;
            display: inline-block;
            border: 1px solid black;
            font-weight: bold;
        }
    </style>
</head>
<body>

<?php for( $i = 1; $i <= 3; $i++ ) : ?>
    <?php for( $j = 1; $j <= $i; $j++ ) : ?>
        <div class="mamang"><?= $i ?></div>
    <?php endfor; ?>
    <br>
<?php endfor; ?>

</body>
</html>