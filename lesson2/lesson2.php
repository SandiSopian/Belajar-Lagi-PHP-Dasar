<?php 
// Pengulangan

// Pengulangan dengan for
echo "Pengulangan dengan for";
echo "<br/>";
for ($i = 0; $i < 10; $i++) {
    echo "Pengulangan ke-$i <br>";
}
echo "------------------------\n";
echo "<br>";


// Pengulangan dengan while
echo "Pengulangan dengan while";
echo "<br/>";
$i = 0;
while ($i < 10) {
    echo "Pengulangan ke-$i <br>";
    $i++;
}
echo "------------------------\n";
echo "<br>";

// Pengulangan dengan do while  
echo "Pengulangan dengan do while";
echo "<br/>";                    
$i = 0;
do {
    echo "Pengulangan ke-$i <br>";
    $i++;
} while ($i < 10);
echo "------------------------\n";
echo "<br>";

// Pengulangan dengan foreach
echo "Pengulangan dengan foreach";
echo "<br/>";
$angka = [1, 2, 3, 4, 5];
foreach ($angka as $a) {
    echo "Angka: $a <br>";
}
echo "------------------------\n";
echo "<br>";


// Pengulangan dengan foreach pada array asosiatif
echo "Pengulangan dengan foreach pada array asosiatif";
echo "<br/>";
$mahasiswa = [
    "nama" => "Budi",
    "umur" => 20,
    "jurusan" => "Informatika"
];
foreach ($mahasiswa as $key => $value) {
    echo "$key: $value <br>";
}
echo "------------------------\n";
echo "<br>";



// Pengulangan dengan foreach pada array multidimensi
$mahasiswa2 = [
    [
        "nama" => "Budi",
        "umur" => 20,
        "jurusan" => "Informatika"
    ],
    [
        "nama" => "Siti",
        "umur" => 22,
        "jurusan" => "Matematika"
    ]
];
?>  