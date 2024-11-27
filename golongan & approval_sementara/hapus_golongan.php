<?php 
include 'koneksi.php'; // Menyertakan koneksi ke database

$id = $_GET['id']; // Mengambil parameter id dari URL

// Query SQL untuk menghapus data golongan berdasarkan id
$sql_h = "DELETE FROM tb_golongan WHERE id = '$id'";
$hapus = mysqli_query($koneksi, $sql_h); // Menjalankan query untuk menghapus data

// Mengecek apakah data berhasil dihapus
if ($hapus) {
    header("location: data_golongan.php"); // Redirect ke halaman data_golongan.php jika berhasil dihapus
} else {
    echo "Gagal Dihapus"; // Menampilkan pesan error jika penghapusan gagal
}
?>
