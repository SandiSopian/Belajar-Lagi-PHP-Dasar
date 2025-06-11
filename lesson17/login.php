<?php
session_start();
require "connectDb_functions.php";

// Cek Cookie untuk username dan password
if (isset($_COOKIE['id']) && isset($_COOKIE['key'])) {
    $id = $_COOKIE['id'];
    $key = $_COOKIE['key'];
    // Ambil data user berdasarkan id
    $result = mysqli_query($koneksi, "SELECT * FROM user WHERE id = '$id'");
    $row = mysqli_fetch_assoc($result);

    // Cek apakah cookie key sesuai dengan username
    if ($key === hash('sha256', $row['username'])) {
        // Set session
        $_SESSION["login"] = true;
        header("Location: index.php");
        exit;
    }
}


// Cek apakah user sudah login, jika sudah arahkan ke halaman index
if (isset($_SESSION["login"])) {
    header("Location: index.php");
    exit;
}


if (isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($koneksi, "SELECT * FROM user WHERE username = '$username'");

    // Cek apakah username ada
    if (mysqli_num_rows($result) === 1) {
        // Ambil data user
        $row = mysqli_fetch_assoc($result);
        // Cek password
        if (password_verify($password, $row["password"])) {
            // Set session
            $_SESSION["login"] = true;

            // Cek apakah remember me dicentang
            if (isset($_POST['remember'])) {

                // Buat cookie yang akan bertahan selama 30 hari
                setcookie('id', hash('sha256', $row["id"]), time() + (86400 * 30), "/");
                setcookie('key', hash('sha256', $row['username']), time() + (86400 * 30), "/");
            }

            // Arahkan ke halaman index
            header("Location: index.php");
            exit;
        }
    }
    $error = "true";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign-in</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        h1 {
            text-align: center;
        }

        form {
            background-color: #fff;
            padding: 60px;
            border-radius: 5px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            justify-content: center;
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 3px;
            border: 1px solid #ccc;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        button:hover {
            background-color: #218838;
        }
    </style>
</head>

<body>
    <form action="login.php" method="post">
        <h1>Sign-in</h1>
        <ul style="list-style-type: none; padding: 0; margin: 0;">

            <?php if (isset($error)) : ?>
                <p style="color:red; font-style: italic;">Password/Username salah</p>
            <?php endif; ?>
            <li>
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
            </li>
            <li>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </li>
            <li>
                <input type="checkbox" id="remember" name="remember">
                <label for="remember">Remember me</label>
            </li>
            <li>
                <button type="submit" name="login">Login</button>
            </li>
        </ul>
    </form>


</body>

</html>