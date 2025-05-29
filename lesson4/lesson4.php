<?php
// Array
// Variable yang berisi beberapa nilai
// Array adalah tipe data yang dapat menyimpan beberapa nilai dalam satu variabel.
// Pasangan antara key dan value
// Array dapat berupa array numerik (indeks) atau asosiatif (key-value).

// Membuat array
$bulan = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];

// Menampilkan array
echo "<h2>Array</h2>";
echo "<pre>";
print_r($bulan);
echo "</pre>";

// Menampilkan elemen array
echo "<h3>Elemen Array</h3>";
foreach ($bulan as $index => $nama_bulan) {
    echo "Bulan ke-" . ($index + 1) . ": " . $nama_bulan . "<br>";
}

// Mengakses elemen array
echo "<h3>Akses Elemen Array</h3>";
echo "Bulan ke-1: " . $bulan[0] . "<br>";
echo "Bulan ke-2: " . $bulan[1] . "<br>";

// Mengubah elemen array
$bulan[0] = "Januari Baru";
echo "<h3>Setelah Mengubah Elemen Array</h3>";
echo "<pre>";
print_r($bulan);
echo "</pre>";

// Menambahkan elemen ke array
$bulan[] = "Desember Baru";
echo "<h3>Setelah Menambahkan Elemen Array</h3>";
echo "<pre>";
print_r($bulan);
echo "</pre>";

// Menghapus elemen dari array
unset($bulan[0]);
echo "<h3>Setelah Menghapus Elemen Array</h3>";
echo "<pre>";
print_r($bulan);
echo "</pre>";

// Menghitung jumlah elemen dalam array         
echo "<h3>Jumlah Elemen Array</h3>";
echo "Jumlah elemen dalam array bulan: " . count($bulan) . "<br>";

// Array Asosiatif
$mahasiswa = [
    "nama" => "Budi",
    "umur" => 20,
    "jurusan" => "Informatika"
];
echo "<h2>Array Asosiatif</h2>";
echo "<pre>";
print_r($mahasiswa);
echo "</pre>";

// Mengakses elemen array asosiatif
echo "<h3>Akses Elemen Array Asosiatif</h3>";
echo "Nama: " . $mahasiswa["nama"] . "<br>";
echo "Umur: " . $mahasiswa["umur"] . "<br>";
echo "Jurusan: " . $mahasiswa["jurusan"] . "<br>";

// Mengubah elemen array asosiatif
$mahasiswa["umur"] = 21;
echo "<h3>Setelah Mengubah Elemen Array Asosiatif</h3>";
echo "<pre>";
print_r($mahasiswa);
echo "</pre>";

// Menambahkan elemen ke array asosiatif
$mahasiswa["alamat"] = "Jakarta";
echo "<h3>Setelah Menambahkan Elemen Array Asosiatif</h3>";
echo "<pre>";
print_r($mahasiswa);
echo "</pre>";

// Menghapus elemen dari array asosiatif
unset($mahasiswa["alamat"]);        
echo "<h3>Setelah Menghapus Elemen Array Asosiatif</h3>";
echo "<pre>";
print_r($mahasiswa);
echo "</pre>";

// Menghitung jumlah elemen dalam array         
echo "<h3>Jumlah Elemen Array Asosiatif</h3>";
echo "Jumlah elemen dalam array mahasiswa: " . count($mahasiswa) . "<br>";

// Array Multidimensi
$mahasiswa2 = [
    [
        "nama" => "Budi",
        "umur" => 20,
        "jurusan" => "Informatika"
    ],
    [
        "nama" => "Siti",
        "umur" => 21,
        "jurusan" => "Sistem Informasi"
    ]
];
echo "<h2>Array Multidimensi</h2>";
echo "<pre>";
print_r($mahasiswa2);
echo "</pre>";

// Mengakses elemen array multidimensi
echo "<h3>Akses Elemen Array Multidimensi</h3>";
foreach ($mahasiswa2 as $index => $mhs) {
    echo "Mahasiswa ke-" . ($index + 1) . ":<br>";
    echo "Nama: " . $mhs["nama"] . "<br>";
    echo "Umur: " . $mhs["umur"] . "<br>";
    echo "Jurusan: " . $mhs["jurusan"] . "<br><br>";
}

// Mengubah elemen array multidimensi
$mahasiswa2[0]["umur"] = 22;
echo "<h3>Setelah Mengubah Elemen Array Multidimensi</h3>";
echo "<pre>";
print_r($mahasiswa2);
echo "</pre>";

// Menambahkan elemen ke array multidimensi
$mahasiswa2[] = [
    "nama" => "Andi",
    "umur" => 22,
    "jurusan" => "Teknik Komputer"
];      
echo "<h3>Setelah Menambahkan Elemen Array Multidimensi</h3>";
echo "<pre>";
print_r($mahasiswa2);
echo "</pre>";

// Menghapus elemen dari array multidimensi
unset($mahasiswa2[1]);
echo "<h3>Setelah Menghapus Elemen Array Multidimensi</h3>";
echo "<pre>";
print_r($mahasiswa2);
echo "</pre>";

// Menghitung jumlah elemen dalam array
echo "<h3>Jumlah Elemen Array Multidimensi</h3>";
echo "Jumlah elemen dalam array mahasiswa2: " . count($mahasiswa2) . "<br>";

// Array dengan fungsi bawaan
$angka = [1, 2, 3, 4, 5];
echo "<h2>Array dengan Fungsi Bawaan</h2>";
echo "<h3>Array Asli</h3>";
echo "<pre>";
print_r($angka);
echo "</pre>";

// Menggunakan fungsi array_map untuk mengalikan setiap elemen dengan 2
$angka_dikali_2 = array_map(function($item) {
    return $item * 2;
}, $angka);
echo "<h3>Setelah Menggunakan array_map</h3>";
echo "<pre>";
print_r($angka_dikali_2);
echo "</pre>";

// Menggunakan fungsi array_filter untuk mengambil elemen yang lebih besar dari 3
$angka_filter = array_filter($angka, function($item) {
    return $item > 3;
});
echo "<h3>Setelah Menggunakan array_filter</h3>";
echo "<pre>";
print_r($angka_filter);
echo "</pre>";

// Menggunakan fungsi array_reduce untuk menjumlahkan semua elemen
$jumlah = array_reduce($angka, function($carry, $item) {
    return $carry + $item;
}, 0);
echo "<h3>Setelah Menggunakan array_reduce</h3>";
echo "Jumlah semua elemen: " . $jumlah . "<br>";

// Menggunakan fungsi array_keys untuk mendapatkan semua key dari array asosiatif
$keys_mahasiswa = array_keys($mahasiswa);
echo "<h3>Keys dari Array Asosiatif Mahasiswa</h3>";
echo "<pre>";
print_r($keys_mahasiswa);
echo "</pre>";

// Menggunakan fungsi array_values untuk mendapatkan semua value dari array asosiatif
$values_mahasiswa = array_values($mahasiswa);
echo "<h3>Values dari Array Asosiatif Mahasiswa</h3>";
echo "<pre>";
print_r($values_mahasiswa);
echo "</pre>";

// Menggunakan fungsi array_merge untuk menggabungkan dua array
$gabungan = array_merge($bulan, $keys_mahasiswa);
echo "<h3>Setelah Menggunakan array_merge</h3>";
echo "<pre>";
print_r($gabungan);
echo "</pre>";

// Menggunakan fungsi array_slice untuk mengambil sebagian dari array
$bagian_bulan = array_slice($bulan, 0, 3);
echo "<h3>Setelah Menggunakan array_slice</h3>";
echo "<pre>";
print_r($bagian_bulan);
echo "</pre>";

// Menggunakan fungsi array_splice untuk menghapus sebagian dari array
array_splice($bulan, 0, 2);
echo "<h3>Setelah Menggunakan array_splice</h3>";
echo "<pre>";
print_r($bulan);
echo "</pre>";

// Menggunakan fungsi array_search untuk mencari nilai dalam array
$index_bulan = array_search("Mei", $bulan);
echo "<h3>Setelah Menggunakan array_search</h3>";
echo "Index dari 'Mei' dalam array bulan: " . $index_bulan . "<br>";

// Menggunakan fungsi in_array untuk memeriksa apakah nilai ada dalam array
$ada_bulan = in_array("Juni", $bulan);
echo "<h3>Setelah Menggunakan in_array</h3>";
echo "Apakah 'Juni' ada dalam array bulan? " . ($ada_bulan ? "Ya" : "Tidak") . "<br>";

// Menggunakan fungsi array_unique untuk menghapus elemen duplikat dari array
$angka_duplikat = [1, 2, 2, 3, 4, 4, 5];
$angka_unik = array_unique($angka_duplikat);
echo "<h3>Setelah Menggunakan array_unique</h3>";
echo "<pre>";
print_r($angka_unik);
echo "</pre>";

// Menggunakan fungsi sort untuk mengurutkan array
sort($bulan);
echo "<h3>Setelah Menggunakan sort</h3>";
echo "<pre>";
print_r($bulan);
echo "</pre>";

// Menggunakan fungsi rsort untuk mengurutkan array secara terbalik
rsort($bulan);
echo "<h3>Setelah Menggunakan rsort</h3>";
echo "<pre>";
print_r($bulan);
echo "</pre>";

// Menggunakan fungsi shuffle untuk mengacak urutan elemen dalam array
shuffle($bulan);
echo "<h3>Setelah Menggunakan shuffle</h3>";
echo "<pre>";
print_r($bulan);
echo "</pre>";

// Menggunakan fungsi array_chunk untuk membagi array menjadi beberapa bagian
$chunked_bulan = array_chunk($bulan, 3);
echo "<h3>Setelah Menggunakan array_chunk</h3>";
echo "<pre>";
print_r($chunked_bulan);
echo "</pre>";

// Menggunakan fungsi array_combine untuk menggabungkan dua array menjadi array asosiatif
$keys = ["nama", "umur", "jurusan"];
$values = ["Budi", 20, "Informatika"];
$combined = array_combine($keys, $values);
echo "<h3>Setelah Menggunakan array_combine</h3>";
echo "<pre>";
print_r($combined);
echo "</pre>";

// Menggunakan fungsi array_flip untuk membalikkan key dan value dari array asosiatif
$flipped = array_flip($mahasiswa);
echo "<h3>Setelah Menggunakan array_flip</h3>";
echo "<pre>";
print_r($flipped);
echo "</pre>";

// Menggunakan fungsi array_count_values untuk menghitung jumlah kemunculan setiap nilai dalam array
$angka_count = array_count_values($angka);
echo "<h3>Setelah Menggunakan array_count_values</h3>";
echo "<pre>";
print_r($angka_count);
echo "</pre>";

// Menggunakan fungsi array_rand untuk mengambil elemen acak dari array
$acak_bulan = array_rand($bulan, 3);
echo "<h3>Setelah Menggunakan array_rand</h3>";
echo "Bulan acak yang diambil: <br>";
foreach ($acak_bulan as $index) {
    echo $bulan[$index] . "<br>";
}

// Menggunakan fungsi array_push untuk menambahkan elemen ke akhir array
array_push($bulan, "Bulan Baru");
echo "<h3>Setelah Menggunakan array_push</h3>";
echo "<pre>";
print_r($bulan);
echo "</pre>";

// Menggunakan fungsi array_pop untuk menghapus elemen terakhir dari array
array_pop($bulan);
echo "<h3>Setelah Menggunakan array_pop</h3>";
echo "<pre>";
print_r($bulan);
echo "</pre>";

// Menggunakan fungsi array_shift untuk menghapus elemen pertama dari array
array_shift($bulan);
echo "<h3>Setelah Menggunakan array_shift</h3>";
echo "<pre>";
print_r($bulan);
echo "</pre>";

// Menggunakan fungsi array_unshift untuk menambahkan elemen ke awal array
array_unshift($bulan, "Bulan Pertama");
echo "<h3>Setelah Menggunakan array_unshift</h3>";
echo "<pre>";
print_r($bulan);
echo "</pre>";

// Menggunakan fungsi array_intersect untuk mencari irisan antara dua array
$angka1 = [1, 2, 3, 4, 5];
$angka2 = [4, 5, 6, 7, 8];
$irisan = array_intersect($angka1, $angka2);
echo "<h3>Setelah Menggunakan array_intersect</h3>";
echo "<pre>";
print_r($irisan);
echo "</pre>";

// Menggunakan fungsi array_diff untuk mencari perbedaan antara dua array
$perbedaan = array_diff($angka1, $angka2);
echo "<h3>Setelah Menggunakan array_diff</h3>";
echo "<pre>";
print_r($perbedaan);
echo "</pre>";

// Menggunakan fungsi array_merge_recursive untuk menggabungkan dua array asosiatif
$mahasiswa1 = [
    "nama" => "Budi",
    "umur" => 20
];
$mahasiswa2 = [
    "nama" => "Siti",
    "jurusan" => "Informatika"
];
$gabungan_mahasiswa = array_merge_recursive($mahasiswa1, $mahasiswa2);
echo "<h3>Setelah Menggunakan array_merge_recursive</h3>";
echo "<pre>";
print_r($gabungan_mahasiswa);
echo "</pre>";

// Menggunakan fungsi array_multisort untuk mengurutkan array multidimensi
$mahasiswa3 = [
    ["nama" => "Budi", "umur" => 20],
    ["nama" => "Siti", "umur" => 21],
    ["nama" => "Andi", "umur" => 19]
];
$umur = array_column($mahasiswa3, 'umur');
array_multisort($umur, SORT_ASC, $mahasiswa3);
echo "<h3>Setelah Menggunakan array_multisort</h3>";
echo "<pre>";
print_r($mahasiswa3);
echo "</pre>";

// Menggunakan fungsi array_column untuk mengambil kolom tertentu dari array multidimensi
$nama_mahasiswa = array_column($mahasiswa3, 'nama');
echo "<h3>Setelah Menggunakan array_column</h3>";
echo "<pre>";
print_r($nama_mahasiswa);
echo "</pre>";

// Menggunakan fungsi array_sum untuk menjumlahkan semua elemen dalam array numerik
$jumlah_angka = array_sum($angka);
echo "<h3>Setelah Menggunakan array_sum</h3>";
echo "Jumlah semua elemen dalam array
angka: " . $jumlah_angka . "<br>";

// Menggunakan fungsi array_product untuk mengalikan semua elemen dalam array numerik
$produk_angka = array_product($angka);
echo "<h3>Setelah Menggunakan array_product</h3>";
echo "Hasil perkalian semua elemen dalam array angka: " . $produk_angka . "<br>";

// Menggunakan fungsi array_reverse untuk membalikkan urutan elemen dalam array
$bulan_terbalik = array_reverse($bulan);
echo "<h3>Setelah Menggunakan array_reverse</h3>";
echo "<pre>";
print_r($bulan_terbalik);
echo "</pre>";

// Menggunakan fungsi array_search untuk mencari nilai dalam array
$index_bulan_tertentu = array_search("Juli", $bulan);
echo "<h3>Setelah Menggunakan array_search</h3>";
echo "Index dari 'Juli' dalam array bulan: " . $index_bulan_tertentu . "<br>";

// Menggunakan fungsi array_key_exists untuk memeriksa apakah key ada dalam array asosiatif
$key_exists = array_key_exists("nama", $mahasiswa);
echo "<h3>Setelah Menggunakan array_key_exists</h3>";
echo "Apakah key 'nama' ada dalam array asosiatif mahasiswa? " . ($key_exists ? "Ya" : "Tidak") . "<br>";

// Menggunakan fungsi array_values untuk mendapatkan semua value dari array asosiatif
$values_mahasiswa2 = array_values($mahasiswa2[0]);
echo "<h3>Values dari Array Asosiatif Mahasiswa2</h3>";
echo "<pre>";
print_r($values_mahasiswa2);
echo "</pre>";

// Menggunakan fungsi array_keys untuk mendapatkan semua key dari array asosiatif
$keys_mahasiswa2 = array_keys($mahasiswa2[0]);
echo "<h3>Keys dari Array Asosiatif Mahasiswa2</h3>";
echo "<pre>";
print_r($keys_mahasiswa2);
echo "</pre>";

// Menggunakan fungsi array_walk untuk menerapkan fungsi pada setiap elemen array
array_walk($mahasiswa2, function(&$item, $key) {
    $item['nama'] = strtoupper($item['nama']);
});
echo "<h3>Setelah Menggunakan array_walk</h3>";
echo "<pre>";
print_r($mahasiswa2);
echo "</pre>";

// Menggunakan fungsi array_filter untuk memfilter elemen array berdasarkan kondisi
$mahasiswa_filter = array_filter($mahasiswa2, function($item) {
    return $item['umur'] > 20;
});
echo "<h3>Setelah Menggunakan array_filter</h3>";
echo "<pre>";
print_r($mahasiswa_filter);
echo "</pre>";

// Menggunakan fungsi array_map untuk menerapkan fungsi pada setiap elemen array
$mahasiswa_map = array_map(function($item) {
    return [
        'nama' => strtoupper($item['nama']),
        'umur' => $item['umur'],
        'jurusan' => $item['jurusan']
    ];
}, $mahasiswa2);
echo "<h3>Setelah Menggunakan array_map</h3>";
echo "<pre>";
print_r($mahasiswa_map);
echo "</pre>";

// Menggunakan fungsi array_reduce untuk menggabungkan elemen array menjadi satu nilai
$jumlah_umur = array_reduce($mahasiswa2, function($carry, $item) {
    return $carry + $item['umur'];
}, 0);
echo "<h3>Setelah Menggunakan array_reduce</h3>";
echo "Jumlah umur semua mahasiswa: " . $jumlah_umur . "<br>";

// Menggunakan fungsi array_chunk untuk membagi array menjadi beberapa bagian
$chunked_mahasiswa = array_chunk($mahasiswa2, 1);
echo "<h3>Setelah Menggunakan array_chunk</h3>";
echo "<pre>";
print_r($chunked_mahasiswa);
echo "</pre>";

// Menggunakan fungsi array_combine untuk menggabungkan dua array menjadi array Asosiatif   
$keys_mahasiswa3 = ["nama", "umur", "jurusan"];
$values_mahasiswa3 = ["Andi", 22, "Teknik Komputer"];
$combined_mahasiswa3 = array_combine($keys_mahasiswa3, $values_mahasiswa3);
echo "<h3>Setelah Menggunakan array_combine</h3>";
echo "<pre>";
print_r($combined_mahasiswa3);
echo "</pre>";









?>  