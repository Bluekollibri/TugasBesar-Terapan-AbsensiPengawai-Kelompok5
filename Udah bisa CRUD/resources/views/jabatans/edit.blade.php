<h1>Edit Jabatan</h1>
<form action="{{ route('jabatans.update', $jabatan->id) }}" method="POST">
    @csrf
    @method('PUT')
    <label for="nama">Nama Jabatan:</label>
    <input type="text" name="nama" value="{{ $jabatan->nama }}" required>

    <button type="submit">Perbarui</button>
</form>
