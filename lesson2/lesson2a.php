<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengulangan</title>
    <style>
        .warna-baris{
            background-color: #f45a65;
        }
    </style>
</head>
<body>
    <table border="1" cellpadding="5" cellspacing="0">
        <?php 
            for( $i = 0; $i < 4; $i++ ){
                echo "<tr>";
                for( $j = 0; $j < 4; $j++ ){           
                    echo "<td>$i,$j</td>";
                }
                echo "</tr>";
            }
        ?>
    </table>

    <table border="1" cellpadding="5" cellspacing="0">
        <?php for( $i = 0; $i <= 3; $i++ ) : ?>
            <tr>
                <?php for( $j = 0; $j <= 3; $j++ ) : ?>
                    <td><?= "$i,$j"; ?></td>
                <?php endfor; ?>
            </tr>
        <?php endfor; ?>
    </table>

      <table border="1" cellpadding="5" cellspacing="0">
        <?php for( $i = 0; $i <= 5; $i++ ) : ?>
            <?php if( $i % 2 == 1 ) : ?>
                <tr class="warna-baris">
            <?php else : ?>
                <tr></tr>
                <?php endif; ?>
                <?php for( $j = 0; $j <= 3; $j++ ) : ?>
                    <td><?= "$i,$j"; ?></td>
                <?php endfor; ?>
            </tr>
        <?php endfor; ?>
    </table>
</body>
</html>