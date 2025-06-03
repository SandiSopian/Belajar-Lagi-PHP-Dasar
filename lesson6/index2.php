<?php
// Koneksi ke database
$koneksi = mysqli_connect("localhost", "root", "", "phpdasar");

// Ambil data dari tabel pokemon
$result = mysqli_query($koneksi, "SELECT * FROM pokemon");

// ambil data (fetch) dari object result
// mysqli_fetch_row() untuk mengambil data sebagai array numerik
// mysqli_fetch_assoc() untuk mengambil data sebagai array asosiatif
// mysqli_fetch_array() untuk mengambil data sebagai array numerik dan asosiatif
// mysqli_fetch_object() untuk mengambil data sebagai object

// while ($pokemon_db = mysqli_fetch_assoc($result)) {
//     // Proses data di sini jika diperlukan
//     // Contoh: 
//     var_dump($pokemon_db);
// }
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
        <?php while ($row = mysqli_fetch_assoc($result)) :
        ?>
            <tr>
                <td><?= $i ?></td>
                <td>
                    <a href="">ubah</a> |
                    <a href="">hapus</a>
                </td>
                <td><img src="img/<?= $row["gambar"]; ?>" alt=" bulbasaur" width="50"></td>
                <td><?= $row["national_no"]; ?></td>
                <td><?= $row["nama"]; ?></td>
                <td><?= $row["tipe"]; ?></td>
                <td><?= $row["generasi"]; ?></td>
            </tr>
            <?php $i++; ?>
        <?php endwhile; ?>

    </table>
</body>

</html>