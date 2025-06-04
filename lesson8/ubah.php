<?php
require 'connectDb_functions.php';

// Buat varibel pokemonId untuk menyimpan id yang didapat dari URL
$pokemonId = $_GET["id"];
// Ambil data berdasarkan id
$pokemon = query("SELECT * FROM pokemon WHERE id = $pokemonId")[0];

if (isset($_POST["submit"])) {
    // Cek apakah data berhasil diubah atau tidak
    if (ubah($_POST) > 0) {
        echo "<script>
                alert('Data berhasil diubah!');
                document.location.href = 'index.php';
              </script>";
    } else {
        echo "<script>
                alert('Data gagal diubah!');
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
    <title>Mengubah Data</title>
</head>

<body>
    <h1>Ubah Data Pokemon</h1>
    <form action="" method="post">
        <ul>
            <li><input type="hidden" name="id" value="<?= $pokemon["id"] ?>"></li>
            <li>
                <label for="gambar">Gambar:</label><br>
                <input type="text" name="gambar" id="gambar" required value="<?= $pokemon["gambar"]; ?>">
            </li>
            <li>
                <label for="national_no">National No:</label><br>
                <input type="text" name="national_no" id="national_no" required value="<?= $pokemon["national_no"]; ?>">
            </li>
            <li>
                <label for="nama">Nama:</label><br>
                <input type="text" name="nama" id="nama" required value="<?= $pokemon["nama"]; ?>">
            </li>
            <li>
                <label for="tipe">Tipe:</label><br>
                <input type="text" name="tipe" id="tipe" required value="<?= $pokemon["tipe"]; ?>">
            </li>
            <li>
                <label for="generasi">Generasi:</label><br>
                <input type="text" name="generasi" id="generasi" required value="<?= $pokemon["generasi"]; ?>">
            </li>
            <li>
                <button type="submit" name="submit">Ubah Data!</button>
            </li>
        </ul>
</body>

</html>