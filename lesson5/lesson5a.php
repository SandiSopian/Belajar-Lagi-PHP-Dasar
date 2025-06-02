<?php
$required = ["nama", "national_no", "tipe", "level", "generasi", "gender", "species", "height", "weight", "spirit"];
foreach ($required as $param) {
    if (!isset($_GET[$param])) {
        header("Location: lesson5.php");
        exit;
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menampilkan Data Pokemon</title>
</head>

<body>
    <h1>Data Pokemon</h1>
    <ul class="pokemon-list">
        <li>
            <img src="img/<?= $_GET["spirit"]; ?>" alt="<?= $_GET["nama"]; ?>" width="100"><br>
        </li>
        <li>
            <strong>National No:</strong> <?= $_GET["national_no"]; ?><br>
        </li>
        <li>
            <strong>Nama:</strong> <?= $_GET["nama"]; ?><br>
        </li>
        <li>
            <strong>Tipe:</strong> <?= $_GET["tipe"]; ?><br>
        </li>
        <li>
            <strong>Level:</strong> <?= $_GET["level"]; ?><br>
        </li>
        <li>
            <strong>Generasi:</strong> <?= $_GET["generasi"]; ?><br>
        </li>
        <li>
            <strong>Gender</strong> <?= $_GET["gender"]; ?><br>
        </li>
        <li>
            <strong>Species:</strong> <?= $_GET["species"]; ?><br>
        </li>
        <li>
            <strong>Height:</strong> <?= $_GET["height"]; ?> m<br>
        </li>
        <li>
            <strong>Weight:</strong> <?= $_GET["weight"]; ?> kg<br>
        </li>

    </ul>

    <a href="lesson5.php">Back to Pokemon List</a>
</body>

</html>