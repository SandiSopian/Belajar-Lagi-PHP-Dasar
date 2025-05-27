<!-- Latihan Membuat Manual Function -->

<?php   
function salam($waktu= "datang", $nama = "Dunia") {
    echo "Selamat $waktu, $nama!<br>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?= salam("Siang", "Kopi"); ?></h1>
</body>
</html>