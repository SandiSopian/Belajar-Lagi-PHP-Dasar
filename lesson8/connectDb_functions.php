<?php
// Koneksi ke database
$koneksi = mysqli_connect("localhost", "root", "", "phpdasar");

// Function untuk mengambil data dari database
function query($query)
{
    global $koneksi;
    $result = mysqli_query($koneksi, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

// Function untuk menambahkan data ke database
function tambah($data)
{
    global $koneksi;

    // Ambil data dari form
    $nama = htmlspecialchars($data["nama"]);
    $national_no = htmlspecialchars($data["national_no"]);
    $tipe = htmlspecialchars($data["tipe"]);
    $generasi = htmlspecialchars($data["generasi"]);
    $gambar = htmlspecialchars($data["gambar"]);

    // Query insert data
    $query = "INSERT INTO pokemon VALUES (NULL, '$nama', '$national_no', '$tipe', '$generasi', '$gambar')";

    mysqli_query($koneksi, $query);

    return mysqli_affected_rows($koneksi);
}

// Function untuk menghapus data dari database
function hapus($id)
{
    global $koneksi;
    mysqli_query($koneksi, "DELETE FROM pokemon WHERE id = $id");
    return mysqli_affected_rows($koneksi);
}

// Function untuk mengubah data di database
function ubah($data)
{
    global $koneksi;

    // Ambil data dari form
    $id = $data["id"];
    $nama = htmlspecialchars($data["nama"]);
    $national_no = htmlspecialchars($data["national_no"]);
    $tipe = htmlspecialchars($data["tipe"]);
    $generasi = htmlspecialchars($data["generasi"]);
    $gambar = htmlspecialchars($data["gambar"]);
    // Query update data
    $query = "UPDATE pokemon SET
                nama = '$nama',
                national_no = '$national_no',
                tipe = '$tipe',
                generasi = '$generasi',
                gambar = '$gambar'
                WHERE id = $id";
    mysqli_query($koneksi, $query);
    return mysqli_affected_rows($koneksi);
}
