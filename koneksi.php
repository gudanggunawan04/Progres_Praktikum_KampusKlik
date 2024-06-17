<?php
    $hostname = "localhost";
    $userDataBase = "root";
    $passwordUser = "";
    $databaseName = "kuliah_pemograman_web";

    $koneksi = mysqli_connect($hostname,$userDataBase,$passwordUser,$databaseName) or die (mysqli_error());
    /*untuk melakukan pengecekan
    if($koneksi) {
     echo "berhasil koneksi";
     } else echo "gagal koneksi";*/
?>
<?php
define('HOST', 'localhost');
define('USER', 'root');
define('DB', 'kuliah_pemograman_web');
//password disesuaikan dengan akses ke database masing-masing
define('PASS','');
$conn = new mysqli(HOST, USER, PASS, DB) or die('Koneksi error untuk mengakses database');
?>