<?php
$pokemon = [
    [
        "national no" => 0025,
        "nama" => "Pikachu",
        "tipe" => "Listrik",
        "level" => 25,
        "generasi" => 1,
        "gender" => "Jantan",
        "species" => "Mouse Pokémon",
        "height" => 0.4,
        "weight" => 6.0,
        "spirit" => "pikachu.jpg",
    ],
    [
        "national no" =>  0001,
        "nama" => "Bulbasaur",
        "tipe" => "Tanaman",
        "level" => 16,
        "generasi" => 1,
        "gender" => "Betina",
        "species" => "Seed Pokémon",
        "height" => 0.7,
        "weight" => 6.9,
        "spirit" => "bulbasaur.jpg",
    ],
    [
        "national no" => 0004,
        "nama" => "Charmander",
        "tipe" => "Api",
        "level" => 36,
        "generasi" => 1,
        "gender" => "Jantan",
        "species" => "Lizard Pokémon",
        "height" => 0.6,
        "weight" => 8.5,
        "spirit" => "charmander.jpg",
    ],
    [
        "national no" => 0007,
        "nama" => "Squirtle",
        "tipe" => "Air",
        "level" => 16,
        "generasi" => 1,
        "gender" => "Betina",
        "species" => "Tiny Turtle Pokémon",
        "height" => 0.5,
        "weight" => 9.0,
        "spirit" => "squirtle.jpg",
    ],
    [
        "national no" => 0133,
        "nama" => "Eevee",
        "tipe" => "Normal",
        "level" => 15,
        "generasi" => 1,
        "gender" => "Betina",
        "species" => "Evolution Pokémon",
        "height" => 0.3,
        "weight" => 6.5,
        "spirit" => "eevee.jpg",
    ],
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menampilkan Data Pokemon</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            color: #333;
        }

        h1 {
            text-align: center;
            color: #4CAF50;
        }

        .pokemon-list {
            list-style-type: none;
            padding: 0;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        .pokemon-list li {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 5px;
            margin: 10px;
            padding: 15px;
            width: 200px;
            text-align: center;
        }

        .pokemon-list img {
            border-radius: 5px;

        }

        .pokemon-list li {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 5px;
            margin: 10px;
            padding: 15px;
            width: 200px;
        }
    </style>
</head>

<body>
    <h1>Data Pokemon</h1>
    <ul class="pokemon-list">
        <?php foreach ($pokemon as $p): ?>
            <li>
                <img src="img/<?= $p["spirit"]; ?>" alt="<?= $p["nama"]; ?>" width="100"><br>
                <strong>National No:</strong> <?= $p["national no"]; ?><br>
                <strong>Nama:</strong> <?= $p["nama"]; ?><br>
                <strong>Tipe:</strong> <?= $p["tipe"]; ?><br>
                <strong>Level:</strong> <?= $p["level"]; ?><br>
                <strong>Generasi:</strong> <?= $p["generasi"]; ?><br>
                <strong>Gender</strong> <?= $p["gender"]; ?><br>
                <strong>Species:</strong> <?= $p["species"]; ?><br>
                <strong>Height:</strong> <?= $p["height"]; ?> m<br>
                <strong>Weight:</strong> <?= $p["weight"]; ?> kg<br>
            </li>
        <?php endforeach; ?>
    </ul>
</body>

</html>