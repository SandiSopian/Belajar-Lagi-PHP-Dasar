<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}

require 'connectDb_functions.php';

$keyword = isset($_GET['keyword']) ? $_GET['keyword'] : '';
$isSearching = !empty($keyword);

$jumlahDataPerHalaman = 3;

$halamanAktif = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
$awalData = ($jumlahDataPerHalaman * $halamanAktif) - $jumlahDataPerHalaman;

if ($isSearching) {
    $sqlWhere = "WHERE nama LIKE '%$keyword%' OR tipe LIKE '%$keyword%' OR generasi LIKE '%$keyword%'";
    $jumlahDataPokemon = count(query("SELECT * FROM pokemon $sqlWhere"));
    $pokemonDb = query("SELECT * FROM pokemon $sqlWhere LIMIT $awalData, $jumlahDataPerHalaman");
} else {
    $jumlahDataPokemon = count(query("SELECT * FROM pokemon"));
    $pokemonDb = query("SELECT * FROM pokemon LIMIT $awalData, $jumlahDataPerHalaman");
}

$jumlahHalaman = ceil($jumlahDataPokemon / $jumlahDataPerHalaman);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Halaman Admin</title>
</head>

<body>
    <a href="logout.php">Logout</a>
    <h1>List Pokemon</h1>
    <a href="tambah.php">Tambah data pokemon</a>

    <!-- Form Pencarian -->
    <form action="" method="get" id="search-form">
        <label for="keyword">Cari data pokemon:</label>
        <input type="text" name="keyword" id="keyword" size="30" autofocus placeholder="Masukkan keyword pencarian..." autocomplete="off" value="<?= htmlspecialchars($keyword) ?>">
    </form>

    <!-- Tabel dan Navigasi dibungkus -->
    <div id="tabel-container">
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
            <?php $i = $awalData + 1; ?>
            <?php foreach ($pokemonDb as $row) : ?>
                <tr>
                    <td><?= $i ?></td>
                    <td>
                        <a href="ubah.php?id=<?= $row["id"] ?>">ubah</a> |
                        <a href="hapus.php?id=<?= $row["id"] ?>" onclick="return confirm('Yakin ingin menghapus data ini?');">hapus</a>
                    </td>
                    <td><img src="img/<?= $row["gambar"]; ?>" alt="<?= $row["gambar"]; ?>" width="50"></td>
                    <td><?= $row["national_no"]; ?></td>
                    <td><?= $row["nama"]; ?></td>
                    <td><?= $row["tipe"]; ?></td>
                    <td><?= $row["generasi"]; ?></td>
                </tr>
                <?php $i++; ?>
            <?php endforeach; ?>
        </table>

        <!-- Navigasi halaman -->
        <nav>
            <ul style="list-style: none; padding: 0; display: flex; gap: 10px;">
                <?php if ($halamanAktif > 1) : ?>
                    <li><a href="?halaman=<?= $halamanAktif - 1; ?>&keyword=<?= urlencode($keyword); ?>" class="page-link">&laquo;</a></li>
                <?php endif; ?>

                <?php for ($i = 1; $i <= $jumlahHalaman; $i++) : ?>
                    <li><a href="?halaman=<?= $i; ?>&keyword=<?= urlencode($keyword); ?>" class="page-link" <?= $i == $halamanAktif ? 'style="font-weight:bold;"' : '' ?>><?= $i; ?></a></li>
                <?php endfor; ?>

                <?php if ($halamanAktif < $jumlahHalaman) : ?>
                    <li><a href="?halaman=<?= $halamanAktif + 1; ?>&keyword=<?= urlencode($keyword); ?>" class="page-link">&raquo;</a></li>
                <?php endif; ?>
            </ul>
        </nav>
    </div>

    <script src="js/script.js"></script>
</body>

</html>