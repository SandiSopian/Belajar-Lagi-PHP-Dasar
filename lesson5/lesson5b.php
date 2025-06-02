<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar POST</title>
</head>

<body>
    <!-- Mengecek apakah sudah di submit atau belum -->
    <?php
    if (isset($_POST["submit"])) : ?>
        <h1>Halo, selamat datang <?= $_POST["nama"]; ?></h1>
    <?php endif; ?>

    <form action="" method="post">
        Masukan nama :
        <input type="text" name="nama" placeholder="Masukan nama anda" required>
        <br><br>
        <button type="submit" name="submit">Kirim!</button>
    </form>

</body>

</html>