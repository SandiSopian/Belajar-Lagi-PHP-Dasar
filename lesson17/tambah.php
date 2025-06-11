<?php
session_start();
// Cek apakah user sudah login, jika belum arahkan ke halaman login
if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}

require 'connectDb_functions.php';

if (isset($_POST["submit"])) {
    // Cek apakah data berhasil ditambahkan
    if (tambah($_POST) > 0) {
        echo "<script>
                alert('Data berhasil ditambahkan!');
                document.location.href = 'index.php';
              </script>";
    } else {
        echo "<script>
                alert('Data gagal ditambahkan!');
                document.location.href = 'index.php';
              </script>";
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menambah Data</title>
</head>

<body>
    <h1>Tambah Data Pokemon</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <ul>
            <li>
                <label for="gambar">Gambar:</label><br>
                <input type="file" name="gambar" id="gambar" required accept="image/*">
            </li>
            <li>
                <label for="national_no">National No:</label><br>
                <input type="text" name="national_no" id="national_no" required>
            </li>
            <li>
                <label for="nama">Nama:</label><br>
                <input type="text" name="nama" id="nama" required>
            </li>
            <li>
                <label for="tipe">Tipe:</label><br>
                <input type="text" name="tipe" id="tipe" required>
            </li>
            <li>
                <label for="generasi">Generasi:</label><br>
                <input type="text" name="generasi" id="generasi" required>
            </li>
            <li>
                <button type="submit" name="submit">Tambah Data!</button>
            </li>
        </ul>
</body>

</html>