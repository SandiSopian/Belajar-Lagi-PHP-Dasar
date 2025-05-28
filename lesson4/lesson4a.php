<?php 
$angka = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menampilkan Array</title>
    <style>
        .kotak {
            width: 100px;
            height: 100px;
            background-color: #f0f0f0;
            border: 1px solid #ccc;
            display: inline-block;
            text-align: center;
            line-height: 100px;
            margin: 5px;
        }
    </style>
</head>
<body>
    <div>
        <!-- Menampilkan Array dengan for -->
        <?php for( $i = 0; $i < count($angka); $i++): ?>
            <div class="kotak"><?= $angka[$i]; ?></div>
        <?php endfor; ?>

        <br/>

        <!-- Menampilkan Array dengan foreach -->
        <?php foreach( $angka as $a ): ?>
            <div class="kotak"><?= $a; ?></div>
        <?php endforeach; ?>
    </div>  
</body>
</html>