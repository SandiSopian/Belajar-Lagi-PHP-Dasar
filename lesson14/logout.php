<?php
session_start();
$_SESSION = [];
session_unset();
session_destroy();


// Hapus cookie yang digunakan untuk remember me
if (isset($_COOKIE['id'])) {
    setcookie('id', '', time() - 3600, '/');
}
if (isset($_COOKIE['key'])) {
    setcookie('key', '', time() - 3600, '/');
}


// Arahkan ke halaman login
header("Location: login.php");
exit;
