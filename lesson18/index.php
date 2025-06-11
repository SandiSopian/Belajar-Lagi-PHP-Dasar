<?php
session_start();
// Cek apakah user sudah login, jika belum arahkan ke halaman login
if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}

// Menggunakan koneksi database
require 'connectDb_functions.php';

// Melakukan query dengan menggunakan fungsi query yang telah dibuat
$pokemonDb = query("SELECT * FROM pokemon");

// Cek apakah tombol cari sudah ditekan
if (isset($_POST["cari"])) {
    $pokemonDb = cari($_POST["keyword"]);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
    <style>
        .loading {
            width: 25px;
            position: absolute;
            left: 410px;
            top: 120px;
            z-index: -1;
            display: none;
        }

        /* Untuk memilah apa saja yang tidak muncul saat akan di print melalui browser */
        @media print {

            .logout,
            .form-cari,
            .loading,
            .tambah-data,
            .aksi,
            .kolom-aksi {
                display: none;
            }

            #container {
                margin-top: 20px;
            }

        }
    </style>
</head>

<body>
    <a href="logout.php" class="logout">Logout</a>
    <a href="cetak.php" target="_blank">Cetak</a>

    <h1>Selamat datang, <?= $_SESSION['username']; ?></h1>
    <h1>List Pokemon</h1>

    <a href="tambah.php" class="tambah-data">Tambah data pokemon</a>

    <br>

    <form action="" method="post" class="form-cari">
        <label for="keyword">Cari data pokemon:</label>
        <input type="text" name="keyword" size="30" autofocus placeholder="Masukkan keyword pencarian..."
            autocomplete="off" id="keyword">
        <button type="submit" name="cari" id="tombol-cari">Cari!</button>

        <img src="img/Rolling.gif" alt="Loading..." class="loading">
    </form>

    <br>

    <div id="container">
        <table border="1" cellpadding="10" cellspacing="0">
            <tr>
                <th>No.</th>
                <th>Gambar</th>
                <th>National No</th>
                <th>Nama</th>
                <th>Tipe</th>
                <th>Generasi</th>
                <th class="kolom-aksi">Aksi</th>
            </tr>
            <?php $i = 1 ?>
            <?php foreach ($pokemonDb as $row) : ?>
                <tr>
                    <td><?= $i ?></td>
                    <td><img src="img/<?= $row["gambar"]; ?>" alt="<?= $row["gambar"]; ?>" width="50"></td>
                    <td><?= $row["national_no"]; ?></td>
                    <td><?= $row["nama"]; ?></td>
                    <td><?= $row["tipe"]; ?></td>
                    <td><?= $row["generasi"]; ?></td>
                    <td class="aksi">
                        <a href="ubah.php?id=<?= $row["id"] ?>">ubah</a> |
                        <a href="hapus.php?id=<?= $row["id"] ?>"
                            onclick="return confirm('Yakin ingin menghapus data ini?');">hapus</a>
                    </td>
                </tr>
                <?php $i++; ?>
            <?php endforeach; ?>

        </table>
    </div>

    <script src="js/jquery-3.7.1.min.js"></script>
    <script src="js/script.js"></script>

    </script>


</body>

</html>