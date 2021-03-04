<!-- 
Eldi Anugrah Pratama
203040031
Rabu pukul 10:00
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Latihan 3</title>
    <style>
        .warna-baris-1 {
            background-color : lightblue;
        }
        .warna-baris-2 {
            background-color : salmon;
        }
    </style>
</head>
<body>
    
    <table border="3" cellpadding="30" cellspacing="5">
            <?php for( $i = 1; $i <= 6; $i++ ) : ?>
                <?php if( $i % 2 == 1 ) : ?>
                    <tr class="warna-baris-1"> 
                <?php elseif ( $i % 2 == 0 ) : ?>
                    <tr class="warna-baris-2">
                <?php endif; ?>
                    <?php for ( $j = 1; $j <= 3; $j++ ) : ?>
                        <td></td>
                    <?php if( $i % 2 == 0) : ?>
                        <td class="warna-baris-1">
                    <?php elseif ( $i % 2 == 1) : ?>
                        <td class="warna-baris-2">
                    <?php endif; ?> 
                <?php endfor; ?>
                </tr>
            <?php endfor; ?>       
        </table>

</body>
</html> 