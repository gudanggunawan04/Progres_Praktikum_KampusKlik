<?php
include "koneksi.php";

// Periksa apakah 'id' ada dalam URL
$id_peserta = isset($_GET['id']) ? $_GET['id'] : '';

// Query untuk mengambil data mahasiswa berdasarkan ID
$query = mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE id = $id_peserta");
$data = mysqli_fetch_assoc($query);

// Periksa apakah data berhasil diambil
if ($data) {
    $nama_mahasiswa = $data['nama_mahasiswa'];
    $npm_mahasiswa = $data['npm_mahasiswa'];
    $prodi = $data['prodi'];
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title></title>
    <link href="liblary/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="liblary/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
    <link href="liblary/assets/styles.css" rel="stylesheet" media="screen">
    <script src="liblary/vendors/modernizr-2.6.2-respond-1.1.0.min.js"></script>
</head>

<body>
    <div class="container">
        <h1 class="mt-5">Edit Data Mahasiswa</h1>
        <form action="edit_proses.php?id=<?php echo $id_peserta; ?>" method="POST">
            <div class="mb-3">
                <label for="nama_mahasiswa" class="form-label">Nama Mahasiswa</label>
                <input type="text" class="form-control" id="nama_mahasiswa" name="nama_mahasiswa"
                    value="<?php echo htmlspecialchars($nama_mahasiswa); ?>" required>
            </div>
            <div class="mb-3">
                <label for="npm_mahasiswa" class="form-label">NPM Mahasiswa</label>
                <input type="text" class="form-control" id="npm_mahasiswa" name="npm_mahasiswa"
                    value="<?php echo htmlspecialchars($npm_mahasiswa); ?>" required>
            </div>
            <div class="mb-3">
                <label for="prodi" class="form-label">Prodi</label>
                <input type="text" class="form-control" id="prodi" name="prodi"
                    value="<?php echo htmlspecialchars($prodi); ?>" required>
            </div>
            <button type="submit" class="btn btn-primary">Update Data</button>
        </form>
        <a href="./index.php" >Kembali ke halaman Data Mahasiswa</a>
    </div>

    <script src="library/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>

<?php
} else {
    echo "<div>Data tidak ditemukan.</div>";
}
?>