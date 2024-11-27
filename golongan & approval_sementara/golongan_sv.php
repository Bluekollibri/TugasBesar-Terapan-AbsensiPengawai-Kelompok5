<?php 
include 'koneksi.php'; // Menyertakan koneksi ke database

if (isset($_POST['simpan'])) { // Mengecek apakah form telah disubmit
    $golongan = $_POST['golongan']; // Mengambil nilai input golongan dari form

    // Query SQL untuk menyimpan data golongan ke dalam database
    $save = "INSERT INTO tb_golongan (golongan) VALUES ('$golongan')";
    
    // Menjalankan query dan mengecek apakah berhasil disimpan
    if (mysqli_query($koneksi, $save)) {
        header("location: data_golongan.php"); // Redirect ke halaman data_golongan.php setelah berhasil disimpan
    } else {
        echo "Gagal disimpan"; // Menampilkan pesan error jika penyimpanan gagal
    }
}
?>
