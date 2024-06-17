<?php
// Mulai sesi
session_start();

// Hapus semua data sesi
session_unset();

// Hancurkan sesi
session_destroy();

// Pesan konfirmasi logout
echo "Anda telah berhasil logout. Terima kasih.";

// Alihkan ke halaman login atau halaman lain yang sesuai
header("Location: login.php");
exit;
?>
