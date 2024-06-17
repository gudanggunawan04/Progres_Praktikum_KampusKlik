<?php
    session_start();
    include "koneksi.php";

    $username = $_POST['username'];
    $password = $_POST['password'];

    // Lakukan query ke database untuk memeriksa username dan password
    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = $koneksi->query($query);

        if ($result->num_rows == 1) {
            // Jika data ditemukan, set session dan redirect ke halaman selanjutnya
            $_SESSION['username'] = $username;
            header("Location: index.php");
        } else {
            // Jika data tidak ditemukan, kembali ke halaman login
            echo "Username atau password salah.";
        }
?>
