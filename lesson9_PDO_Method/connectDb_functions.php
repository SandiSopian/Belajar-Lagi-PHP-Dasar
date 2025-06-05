<?php
require 'connectDb.php';

// Ambil semua data
function query($query)
{
    global $pdo;
    $stmt = $pdo->query($query);
    return $stmt->fetchAll();
}

// Tambah data
function tambah($data)
{
    global $pdo;

    $stmt = $pdo->prepare("INSERT INTO pokemon (nama, national_no, tipe, generasi, gambar) VALUES (?, ?, ?, ?, ?)");
    $stmt->execute([
        $data["nama"],
        $data["national_no"],
        $data["tipe"],
        $data["generasi"],
        $data["gambar"]
    ]);

    return $stmt->rowCount();
}

// Hapus data
function hapus($id)
{
    global $pdo;

    $stmt = $pdo->prepare("DELETE FROM pokemon WHERE id = ?");
    $stmt->execute([$id]);

    return $stmt->rowCount();
}

// Ubah data
function ubah($data)
{
    global $pdo;

    $stmt = $pdo->prepare("UPDATE pokemon SET nama = ?, national_no = ?, tipe = ?, generasi = ?, gambar = ? WHERE id = ?");
    $stmt->execute([
        $data["nama"],
        $data["national_no"],
        $data["tipe"],
        $data["generasi"],
        $data["gambar"],
        $data["id"]
    ]);

    return $stmt->rowCount();
}

// Cari data
function cari($keyword)
{
    global $pdo;
    $like = "%$keyword%";
    $stmt = $pdo->prepare("SELECT * FROM pokemon WHERE 
        nama LIKE ? OR
        national_no LIKE ? OR
        tipe LIKE ? OR
        generasi LIKE ?");
    $stmt->execute([$like, $like, $like, $like]);
    return $stmt->fetchAll();
}
