<?php
// Array Numerik 
$mahasiswa = [
    ["Budi", "123456","Teknik Informatika"],
    ["Siti", "654321","Sistem Informasi"],
    ["Andi", "789012","Teknik Komputer"]
];
?>

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
        <?php foreach( $mahasiswa as $m ): ?>
            <li>
                Nama: <?= $m[0]; ?>, 
                NIM: <?= $m[1]; ?>, 
                Jurusan: <?= $m[2]; ?>
            </li>
        <?php endforeach; ?>
    </ul>
    
</body>
</html>