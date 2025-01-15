<?php
$host = 'localhost'; 
$dbname = 'nama_database'; 
$username = 'root';
$password = '';

$conn = new mysqli($host, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

$user = $_POST['email'];
$pass = $_POST['password'];

$sql = "SELECT * FROM karyawan WHERE nama = ? AND password = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $user, $pass);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    echo "Login berhasil! Selamat datang, $user.";
    header("Location: Dashboard-admin.html");
} else {
    echo "Login gagal! Username atau password salah.";
    header("Refresh: 2; URL=login_page.html");
}

$stmt->close();
$conn->close();
?>
