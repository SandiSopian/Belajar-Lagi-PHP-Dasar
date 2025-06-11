<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once __DIR__ . '/../vendor/autoload.php';

// Menggunakan koneksi database
require 'connectDb_functions.php';

// Melakukan query dengan menggunakan fungsi query yang telah dibuat
$pokemonDb = query("SELECT * FROM pokemon");

$html = '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Pokemon</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<h1>List Pokemon</h1>
<table border="1" cellpadding="10" cellspacing="0">
            <tr>
                <th>No.</th>
                <th>Gambar</th>
                <th>National No</th>
                <th>Nama</th>
                <th>Tipe</th>
                <th>Generasi</th>
            </tr>';

foreach ($pokemonDb as $index => $pokemon) {
    $html .= '<tr>
                <td>' . ($index + 1) . '</td>
                <td><img src="img/' . $pokemon['gambar'] . '" width="50"></td>
                <td>' . htmlspecialchars($pokemon['national_no']) . '</td>
                <td>' . htmlspecialchars($pokemon['nama']) . '</td>
                <td>' . htmlspecialchars($pokemon['tipe']) . '</td>
                <td>' . htmlspecialchars($pokemon['generasi']) . '</td>
            </tr>';
}

$html .= '</table>
</body>
</html>';

$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML($html);
$mpdf->Output('list_pokemon.pdf', \Mpdf\Output\Destination::INLINE);
