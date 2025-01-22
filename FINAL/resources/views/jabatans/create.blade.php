<head>
    <link rel="stylesheet" href="{{ asset('css/formCSS.css') }}">
</head>

<div class="container">
    <h1>Tambah Jabatan</h1>
    <form action="{{ route('jabatans.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="nama" id="nama-label">Nama Jabatan:</label>
            <input 
                type="text" 
                id="nama" 
                name="nama" 
                placeholder="Masukkan nama jabatan" 
                required
            >
            @error('nama')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <button type="submit" id="submit" class="btn btn-primary">Simpan</button>
        </div>
    </form>
</div>
