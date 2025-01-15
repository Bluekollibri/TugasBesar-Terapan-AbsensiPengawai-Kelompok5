<?php
$host = 'localhost'; // Ganti dengan host database Anda
$dbname = 'nama_database'; // Ganti dengan nama database Anda
$username = 'root'; // Ganti dengan username database Anda
$password = ''; // Ganti dengan password database Anda

// Koneksi ke database
$conn = new mysqli($host, $username, $password, $dbname);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Ambil data dari form login
$user = $_POST['email'];
$pass = $_POST['password'];

// Query untuk verifikasi login
$sql = "SELECT * FROM karyawan WHERE nama = ? AND password = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $user, $pass);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    echo "Login berhasil! Selamat datang, $user.";
    // Redirect ke halaman dashboard atau berikan respons sukses
    header("Location: Dashboard-admin.html");
} else {
    echo "Login gagal! Username atau password salah.";
    // Redirect kembali ke halaman login atau berikan pesan error
    header("Refresh: 2; URL=login_page.html");
}

$stmt->close();
$conn->close();
?>
