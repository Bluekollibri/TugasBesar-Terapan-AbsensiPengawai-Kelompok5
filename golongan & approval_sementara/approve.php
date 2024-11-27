<?php 
include 'koneksi.php'; // Menyertakan koneksi ke database

$id = $_GET['id']; // Mengambil parameter id dari URL

// Query SQL untuk memperbarui status permintaan menjadi 'Approved'
$sql_approve = "UPDATE tb_approval SET status = 'Approved' WHERE id = '$id'";

// Menjalankan query dan mengecek apakah berhasil
if (mysqli_query($koneksi, $sql_approve)) {
    header("location: data_approval.php"); // Redirect ke halaman data_approval.php setelah berhasil disetujui
} else {
    echo "Gagal Disetujui"; // Menampilkan pesan error jika gagal disetujui
}
?>
