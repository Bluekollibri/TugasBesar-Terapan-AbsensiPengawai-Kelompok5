<h1>Tambah Jabatan</h1>
<form action="{{ route('jabatans.store') }}" method="POST">
    @csrf
    <label for="nama">Nama Jabatan:</label>
    <input type="text" name="nama" required>

    <button type="submit">Simpan</button>
</form>
