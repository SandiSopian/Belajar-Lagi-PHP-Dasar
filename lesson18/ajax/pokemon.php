<?php
sleep(1); // Simulate a delay for the AJAX request
require '../connectDb_functions.php';

$keyword = $_GET["keyword"];

$query = "SELECT * FROM pokemon WHERE
                nama LIKE '%$keyword%' OR
                national_no LIKE '%$keyword%' OR
                tipe LIKE '%$keyword%' OR
                generasi LIKE '%$keyword%'
                ";
$pokemonDb = query($query);
?>

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