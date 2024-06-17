<?php
include "koneksi.php";

// Mengambil data inputan
$nama_mhs = mysqli_real_escape_string($koneksi, $_POST['nama']);
$npm_mhs = mysqli_real_escape_string($koneksi, $_POST['npm']);
$prodi_mhs = mysqli_real_escape_string($koneksi, $_POST['prodi']);

// Proses penyimpanan data ke database
$stmt = $koneksi->prepare("INSERT INTO mahasiswa (nama_mahasiswa, npm_mahasiswa, prodi) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $nama_mhs, $npm_mhs, $prodi_mhs);

if ($stmt->execute()) {
    echo "
        <script>
            alert('Data Berhasil Disimpan');
            window.location.href='index.php';
        </script>";
} else {
    echo "
        <script>
            alert('Data Gagal Disimpan');
            window.location.href='index.php';
        </script>";
}
// Proses penyimpanan gambar
 if(isset($_FILES['gambar']) && $_FILES['gambar']['error'] === UPLOAD_ERR_OK) {
    $gambar_name = $_FILES['gambar']['name'];
    $gambar_tmp = $_FILES['gambar']['tmp_name'];
    $upload_path = "uploads/";
    $destination = $upload_path . $gambar_name;
    if(move_uploaded_file($gambar_tmp, $destination)) {
    } else {
        echo "Failed to move uploaded file.";
    }
} else {
    echo "No file uploaded or an error occurred while uploading.";
}

$stmt->close();
$koneksi->close();
?>