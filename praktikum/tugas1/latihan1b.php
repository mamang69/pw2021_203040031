<!-- 
Eldi Anugrah Pratama
203040031
Rabu pukul 10:00
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <table border="1" cellspacing="0" cellpadding="10">
        <tr>
        <th></th>
         <?php for ($i = 1; $i <= 5; $i++) : ?>
            <th>Kolom <?= $i; ?></th>
        <?php endfor; ?>

        </tr>
       <?php for ($i = 1; $i <= 5; $i++) : ?>
        <?php if ($i % 2 == 0 ) : ?>
            <tr>

        <?php else :?>
            <tr>

        <?php endif; ?>
        <?php for ($j=0; $j < 1; $j++) : ?>
                  <th><?= "Baris $i"; ?></th>
                <?php endfor; ?>
                <?php for ($j=1; $j <= 5; $j++) : ?>
                  <td><?= " baris ke $i, kolom ke $j"; ?></td>
                <?php endfor; ?>
            </tr>

        <?php endfor; ?>
    </table>
</body>
</html>