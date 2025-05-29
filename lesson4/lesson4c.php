<?php
// Array Associative
$mahasiswa = [
    ["nama" => "Budi", "NIM" => "123456", "Jurusan" => "Teknik Informatika"],
    ["nama" => "Siti", "NIM" => "654321", "Jurusan" => "Sistem Informasi"],
    ["nama" => "Andi", "NIM" => "789012", "Jurusan" => "Teknik Komputer"]
];

// Array Numerik
$random_number = [
    [4, 8, 15, 16, 23, 42, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10],
    [5, 10, 15, 20, 25, 30, 35, 40, 45, 50],
    [1, 2, 3, 4, 5, 6, 7, 8, 9, 10]
] ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <ul>
        <!-- Menampilkan Array dengan foreach -->
        <?php foreach ($mahasiswa as $m): ?>
            <li>
                Nama: <?= $m["nama"]; ?>,
                NIM: <?= $m["NIM"]; ?>,
                Jurusan: <?= $m["Jurusan"]; ?>
            </li>
        <?php endforeach; ?>
    </ul>

    <!-- Array Numerik -->
    <ul>
        <!-- Menampilkan Array dengan foreach -->
        <?php foreach ($random_number as $numbers): ?>
            <li>
                <?php foreach ($numbers as $number): ?>
                    <?= $number; ?>
                <?php endforeach; ?>
            </li>
        <?php endforeach; ?>
    </ul>
</body>

</html>