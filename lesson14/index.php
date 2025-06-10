<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}

require 'connectDb_functions.php';

// Cek apakah sedang melakukan pencarian
$keyword = isset($_GET['keyword']) ? $_GET['keyword'] : '';
$isSearching = !empty($keyword);

// Konfigurasi pagination
$jumlahDataPerHalaman = 2;

// Hitung jumlah data sesuai kondisi (pencarian atau tidak)
if ($isSearching) {
    $sqlWhere = "WHERE nama LIKE '%$keyword%' OR tipe LIKE '%$keyword%' OR generasi LIKE '%$keyword%'";
    $jumlahDataPokemon = count(query("SELECT * FROM pokemon $sqlWhere"));
} else {
    $jumlahDataPokemon = count(query("SELECT * FROM pokemon"));
}

$jumlahHalaman = ceil($jumlahDataPokemon / $jumlahDataPerHalaman);
$halamanAktif = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
$awalData = ($jumlahDataPerHalaman * $halamanAktif) - $jumlahDataPerHalaman;

// Query data sesuai halaman dan kondisi pencarian
if ($isSearching) {
    $pokemonDb = query("SELECT * FROM pokemon $sqlWhere LIMIT $awalData, $jumlahDataPerHalaman");
} else {
    $pokemonDb = query("SELECT * FROM pokemon LIMIT $awalData, $jumlahDataPerHalaman");
}
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

    <!-- Form pencarian -->
    <form action="" method="get">
        <label for="keyword">Cari data pokemon:</label>
        <input type="text" name="keyword" size="30" autofocus placeholder="Masukkan keyword pencarian..." autocomplete="off" value="<?= htmlspecialchars($keyword) ?>">
        <button type="submit">Cari!</button>
    </form>

    <!-- Navigasi halaman -->
    <nav>
        <ul style="list-style: none; padding: 0; display: flex; gap: 10px;">
            <?php if ($halamanAktif > 1) : ?>
                <li><a href="?halaman=<?= $halamanAktif - 1; ?>&keyword=<?= urlencode($keyword); ?>">&laquo;</a></li>
            <?php endif; ?>

            <?php for ($i = 1; $i <= $jumlahHalaman; $i++) : ?>
                <?php if ($i == $halamanAktif) : ?>
                    <li><a href="?halaman=<?= $i; ?>&keyword=<?= urlencode($keyword); ?>" style="font-weight: bold;"><?= $i; ?></a></li>
                <?php else : ?>
                    <li><a href="?halaman=<?= $i; ?>&keyword=<?= urlencode($keyword); ?>"><?= $i; ?></a></li>
                <?php endif; ?>
            <?php endfor; ?>

            <?php if ($halamanAktif < $jumlahHalaman) : ?>
                <li><a href="?halaman=<?= $halamanAktif + 1; ?>&keyword=<?= urlencode($keyword); ?>">&raquo;</a></li>
            <?php endif; ?>
        </ul>
    </nav>

    <!-- Tabel data -->
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
</body>

</html>