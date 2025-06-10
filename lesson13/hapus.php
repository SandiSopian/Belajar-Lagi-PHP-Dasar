<?php
session_start();
// Cek apakah user sudah login, jika belum arahkan ke halaman login
if (!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}

require 'connectDb_functions.php';

$id = $_GET["id"];

if (hapus($id) > 0) {
  echo "<script>
            alert('Data berhasil dihapus!');
            document.location.href = 'index.php';
          </script>";
} else {
  echo "<script>
            alert('Data gagal dihapus!');
            document.location.href = 'index.php';
          </script>";
}
