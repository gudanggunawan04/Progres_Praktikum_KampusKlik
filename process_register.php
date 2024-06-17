<?php
include "koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Lakukan operasi insert ke database
    $query = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
    $result = $koneksi->query($query);

    if ($result) {
        echo "<script>alert('Registrasi berhasil. Silakan login.');</script>";
        header("Location: login.php");
    } else {
        echo "<script>alert('Registrasi gagal. Silakan coba lagi.');</script>";
    }
}
?>
