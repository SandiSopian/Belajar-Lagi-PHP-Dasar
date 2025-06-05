<?php
// Koneksi ke database
$koneksi = mysqli_connect("localhost", "root", "", "phpdasar");

// Fungsi umum untuk menjalankan query dan mengembalikan data dalam bentuk array asosiatif
function query($query)
{
    global $koneksi;
    $result = mysqli_query($koneksi, $query);
    return mysqli_fetch_all($result, MYSQLI_ASSOC);
}

// Fungsi untuk mengamankan input dari SQL Injection
function escape($data)
{
    global $koneksi;
    return mysqli_real_escape_string($koneksi, $data);
}

// Fungsi untuk menambahkan data ke dalam tabel pokemon
function tambah($data)
{
    global $koneksi;

    // Ambil dan amankan data dari form
    $nama = escape($data["nama"]);
    $national_no = escape($data["national_no"]);
    $tipe = escape($data["tipe"]);
    $generasi = escape($data["generasi"]);
    $gambar = escape($data["gambar"]);

    // Query SQL untuk insert data
    $query = "INSERT INTO pokemon (nama, national_no, tipe, generasi, gambar)
              VALUES ('$nama', '$national_no', '$tipe', '$generasi', '$gambar')";

    // Jalankan query
    mysqli_query($koneksi, $query);

    // Kembalikan jumlah baris yang terpengaruh (untuk mengetahui berhasil/tidak)
    return mysqli_affected_rows($koneksi);
}

// Fungsi untuk menghapus data berdasarkan ID
function hapus($id)
{
    global $koneksi;
    $id = (int) $id; // Ubah jadi integer untuk keamanan

    // Jalankan query delete
    mysqli_query($koneksi, "DELETE FROM pokemon WHERE id = $id");

    return mysqli_affected_rows($koneksi);
}

// Fungsi untuk mengubah data pokemon
function ubah($data)
{
    global $koneksi;

    // Ambil dan amankan data
    $id = (int) $data["id"];
    $nama = escape($data["nama"]);
    $national_no = escape($data["national_no"]);
    $tipe = escape($data["tipe"]);
    $generasi = escape($data["generasi"]);
    $gambar = escape($data["gambar"]);

    // Query SQL untuk update data
    $query = "UPDATE pokemon SET
                nama = '$nama',
                national_no = '$national_no',
                tipe = '$tipe',
                generasi = '$generasi',
                gambar = '$gambar'
              WHERE id = $id";

    // Jalankan query
    mysqli_query($koneksi, $query);

    return mysqli_affected_rows($koneksi);
}

// Fungsi untuk mencari data berdasarkan keyword
function cari($keyword)
{
    $keyword = escape($keyword); // Amankan keyword pencarian

    // Query pencarian dengan LIKE untuk semua kolom relevan
    $query = "SELECT * FROM pokemon WHERE
                nama LIKE '%$keyword%' OR
                national_no LIKE '%$keyword%' OR
                tipe LIKE '%$keyword%' OR
                generasi LIKE '%$keyword%'";

    return query($query); // Gunakan fungsi query untuk ambil datanya
}
