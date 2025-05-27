<?php 
print_r("Welcome to Lesson 1: Introduction to PHP\n");
echo "<br>";

// Variabel
// Variabel digunakan untuk menyimpan data
// Penamaan variabel harus dimulai dengan huruf atau garis bawah (_)
// Variabel bersifat case-sensitive, artinya $nama dan $Nama adalah variabel yang berbeda
// Contoh variabel
$nama = "Sandi";

// Operator Aritmatika
// + - * / %
echo "Operator Aritmatika\n";
echo "<br>";
$x = 10;
$y = 5;
echo "Hasil penjumlahan: " . ($x + $y) . "\n";
echo "<br>";
echo "------------------------\n";
echo "<br>";

// Penggabung string // Concatenation // Menggunakan titik (.) untuk menggabungkan string
echo "Penggabung String\n";
echo "<br>";
$nama_depan = "Sandi";
$nama_belakang = "Sopian";

echo "Nama lengkap saya adalah " . $nama_depan . " " . $nama_belakang . "\n";
echo "<br>";
echo "------------------------\n";
echo "<br>";

// Assigment Operator
// =, +=, -=, *=, /=, %=
echo "Assignment Operator\n";
echo "<br>";
$x = 10;
$x += 5; // Sama dengan $x = $x + 5;
echo "Nilai x setelah penambahan 5 adalah: " . $x . "\n";
echo "<br>";
echo "------------------------\n";
echo "<br>";

// Operator Perbandingan
// ==, !=, >, <, >=, <=
echo "Operator Perbandingan\n";
echo "<br>";
$nilai1 = 10;
$nilai2 = 20;
if ($nilai1 < $nilai2) {
    echo "Nilai 1 lebih kecil dari Nilai 2\n";
} else {
    echo "Nilai 1 tidak lebih kecil dari Nilai 2\n";
}
echo "<br>";
echo "------------------------\n";
echo "<br>";

// Operator Identitas
// ===, !==
echo "Operator Identitas\n";
echo "<br>";
$nilai1 = 10;
$nilai2 = "10"; // Perbandingan identitas
if ($nilai1 === $nilai2) {
    echo "Nilai 1 dan Nilai 2 identik (tipe data sama)\n";
} else {
    echo "Nilai 1 dan Nilai 2 tidak identik (tipe data berbeda)\n";
}
echo "<br>";
echo "------------------------\n";
echo "<br>";

// Operator Ternary
// ? :
echo "Operator Ternary\n";
echo "<br>";
$nilai = 10;
$hasil = ($nilai > 5) ? "Nilai lebih besar dari 5" : "Nilai tidak lebih besar dari 5";
echo "Hasil Ternary: " . $hasil . "\n";
echo "<br>";
echo "------------------------\n";
echo "<br>";

// Operator Null Coalescing 
// ??
echo "Null Coalescing Operator\n";
echo "<br>";
$nilai = null;
$hasil = $nilai ?? "Nilai tidak ada";
echo "Hasil Null Coalescing: " . $hasil . "\n";
echo "<br>";
echo "------------------------\n";
echo "<br>";

// Operator Bitwise
// &, |, ^, ~, <<, >>
echo "Operator Bitwise\n";
echo "<br>";
$nilai1 = 5; // 0101 dalam biner
$nilai2 = 3; // 0011 dalam biner
echo "Hasil AND Bitwise: " . ($nilai1 & $nilai2) . "\n"; // 0001 dalam biner, hasilnya 1
echo "Hasil OR Bitwise: " . ($nilai1 | $nilai2) . "\n"; // 0111 dalam biner, hasilnya 7
echo "<br>";
echo "------------------------\n";
echo "<br>";

// Operator Increment dan Decrement
// ++, --
echo "Operator Increment dan Decrement\n";
echo "<br>";
$nilai = 10;
echo "Nilai awal: " . $nilai . "\n";
$nilai++; // Increment
echo "Nilai setelah increment: " . $nilai . "\n"; // 11
$nilai--; // Decrement
echo "Nilai setelah decrement: " . $nilai . "\n"; // 10
echo "<br>";
echo "------------------------\n";
echo "<br>";

// Operator Logika
// &&, ||, !
echo "Operator Logika\n";
echo "<br>";
$nilai1 = 10;
$nilai2 = 20;
if ($nilai1 < $nilai2 && $nilai1 > 0) {
    echo "Nilai 1 lebih kecil dari Nilai 2 dan lebih besar dari 0\n";
} else {
    echo "Kondisi tidak terpenuhi\n";
}
           
echo "<br>";
echo "------------------------\n";
echo "<br>";
?>  
 


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lesson 1: Introduction to PHP</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.9.0/css/bulma.min.css">
</head>
<body>
    <section class="section">
        <div class="container">
            <h1 class="title">Welcome to Lesson 1</h1>
            <h2>
                <?php echo $nama; ?>
            </h2>
            <p class="subtitle">
</html>