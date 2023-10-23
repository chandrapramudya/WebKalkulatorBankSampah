<?php
// Inisialisasi sesi jika belum ada
session_start();

// Hapus semua data sesi
session_unset();
session_destroy();

// Alihkan pengguna ke halaman login atau halaman lain setelah logout
header("Location: login.php");
exit;
?>
