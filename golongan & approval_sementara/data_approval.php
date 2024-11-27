<?php 
include 'koneksi.php'; // Menyertakan koneksi ke database
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Data Approval</title>
    <!-- Masukkan link CSS di sini -->
</head>

<body>
    <div class="container">
        <h1>Data Approval</h1>
        
        <!-- Tabel untuk menampilkan permintaan approval -->
        <!-- Tabel ini menampilkan semua permintaan persetujuan dengan opsi untuk menyetujui atau menolaknya -->
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Karyawan</th>
                    <th>Jenis Pengajuan</th>
                    <th>Status</th> <!-- Status dari permintaan approval -->
                    <th>Aksi</th> <!-- Kolom untuk aksi persetujuan atau penolakan -->
                </tr>
            </thead>
            <tbody>
                <?php
                    // Query SQL untuk mengambil semua data dari tabel tb_approval
                    $sql = "SELECT * FROM tb_approval";
                    $query = mysqli_query($koneksi, $sql); // Menjalankan query
                    $no = 1; // Inisialisasi nomor urut untuk baris
                    while ($row = mysqli_fetch_array($query)) { // Mengambil data baris per baris
                ?>
                    <tr>
                        <td><?php echo $no ?></td> <!-- Menampilkan nomor urut -->
                        <td><?php echo $row['nama_karyawan']; ?></td> <!-- Menampilkan nama karyawan -->
                        <td><?php echo $row['jenis_pengajuan']; ?></td> <!-- Menampilkan jenis pengajuan -->
                        <td><?php echo $row['status']; ?></td> <!-- Menampilkan status approval -->
                        <td>
                            <!-- Tombol untuk menyetujui permintaan, mengarah ke approve.php untuk memperbarui status -->
                            <a href="approve.php?id=<?php echo $row['id']; ?>" class="btn btn-success">Approve</a>
                            <!-- Tombol untuk menolak permintaan, mengarah ke reject.php untuk memperbarui status -->
                            <a href="reject.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Reject</a>
                        </td>
                    </tr>
                <?php 
                    $no++; // Menambah nomor urut untuk baris berikutnya
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>
