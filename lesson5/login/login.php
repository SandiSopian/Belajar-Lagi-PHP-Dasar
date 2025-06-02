<?php
// Cek apakah tombol submit sudah ditekan
$error = null; // Initialize $error to avoid undefined variable notice
if (isset($_POST["submit"])) {

    if ($_POST["username"] == "admin" && $_POST["password"] == "12345") {
        // Jika username dan password benar
        header("Location: admin.php");
        exit;
    } else {
        // Jika username atau password salah
        $error = true;
    }
}

?>

<?php empty($error) ? null : $error; // Ensure $error is defined before using it 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log-in</title>
</head>

<h1>Login admin</h1>

<?php if (isset($error)) : ?>
    <p style="color: red; font-style: italic;">Username/Password salah</p>
<?php endif; ?>

<body>
    <ul>
        <form action="" method="post">
            <li>
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
            </li>
            <li>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </li>
            <li>
                <button type="submit" name="submit">Log in</button>
            </li>
        </form>
    </ul>

</body>

</html>