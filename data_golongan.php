<?php 
include 'koneksi.php'; // Menyertakan file koneksi ke database
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Data Golongan</title>
    <!-- Masukkan link CSS di sini -->
</head>

<body>
    <div class="container">
        <h1>Data Golongan</h1>
        
        <!-- Form untuk memasukkan Golongan baru -->
        <!-- Form ini akan mengirimkan data ke golongan_sv.php untuk disimpan -->
        <form action="golongan_sv.php" method="post">
            <div class="form-group">
                <label for="golongan">Golongan</label>
                <input type="text" name="golongan" class="form-control" autocomplete="off">
            </div>
            <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
            <input type="reset" class="btn btn-danger" value="Batal">
        </form>
        
        <!-- Tabel untuk menampilkan data Golongan -->
        <!-- Tabel ini menampilkan semua golongan yang sudah ada di database -->
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Golongan</th>
                    <th>Aksi</th> <!-- Kolom untuk aksi menghapus data golongan -->
                </tr>
            </thead>
            <tbody>
                <?php
                    // Query SQL untuk mengambil semua data dari tabel tb_golongan
                    $sql = "SELECT * FROM tb_golongan";
                    $query = mysqli_query($koneksi, $sql); // Menjalankan query
                    $no = 1; // Inisialisasi nomor urut untuk baris
                    while ($row = mysqli_fetch_array($query)) { // Mengambil data baris per baris
                ?>
                    <tr>
                        <td><?php echo $no ?></td> <!-- Menampilkan nomor urut -->
                        <td><?php echo $row['golongan']; ?></td> <!-- Menampilkan nama golongan -->
                        <td>
                            <!-- Tombol Hapus, mengarah ke hapus_golongan.php untuk menghapus golongan -->
                            <a href="hapus_golongan.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Yakin ingin dihapus?');">
                                <button class="btn btn-danger">Hapus</button>
                            </a>
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
