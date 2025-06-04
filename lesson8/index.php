<?php
// Menggunakan koneksi database
require 'connectDb_functions.php';

// Melakukan query dengan menggunakan fungsi query yang telah dibuat
$pokemonDb = query("SELECT * FROM pokemon");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>

<body>

    <h1>List Pokemon</h1>

    <a href="tambah.php">Tambah data pokemon</a>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>National No</th>
            <th>Nama</th>
            <th>Tipe</th>
            <th>Generasi</th>
        </tr>
        <?php $i = 1 ?>
        <?php foreach ($pokemonDb as $row) : ?>
            <tr>
                <td><?= $i ?></td>
                <td>
                    <a href="ubah.php?id=<?= $row["id"] ?>">ubah</a> |
                    <a href="hapus.php?id=<?= $row["id"] ?>"
                        onclick="return confirm('Yakin ingin menghapus data ini?');">hapus</a>
                </td>
                <td><img src="img/<?= $row["gambar"]; ?>" alt=" bulbasaur" width="50"></td>
                <td><?= $row["national_no"]; ?></td>
                <td><?= $row["nama"]; ?></td>
                <td><?= $row["tipe"]; ?></td>
                <td><?= $row["generasi"]; ?></td>
            </tr>
            <?php $i++; ?>
        <?php endforeach; ?>

    </table>
</body>

</html>