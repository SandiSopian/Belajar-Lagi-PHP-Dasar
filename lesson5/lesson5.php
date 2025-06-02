<?php
$pokemon = [
    [
        "national_no" => 0025,
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
        "national_no" =>  0001,
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
        "national_no" => 0004,
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
        "national_no" => 0007,
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
        "national_no" => 0133,
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
    <title>List Pokemon</title>
</head>

<body>
    <h1>List Pokemon</h1>
    <ul>
        <?php foreach ($pokemon as $p) : ?>
            <li>
                <!-- Ini sebelum diringkas -->
                <!-- <a href="lesson5a.php?nama=<?= $p["nama"]; ?>&national_no=<?= $p["national_no"]; ?>&tipe=<?= $p["tipe"] ?>&level=<?= $p["level"]; ?>&generasi=<?= $p["generasi"]; ?>&gender=<?= $p["gender"]; ?>&species=<?= $p["species"]; ?>&height=<?= $p["height"]; ?>&weight=<?= $p["weight"]; ?>&spirit=<?= $p["spirit"]; ?> 
                ">
                    <?= $p["nama"]; ?>
                </a> -->

                <!-- Ini setelah diringkas -->
                <!-- Logika ini agar mengganti seluruh baris url yang panjang itu dengan versi yang lebih ringkas dan bersih -->
                <?php $query = http_build_query($p); ?>
                <a href="lesson5a.php?<?= $query ?>">
                    <?= htmlspecialchars($p["nama"]); ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>

</html>