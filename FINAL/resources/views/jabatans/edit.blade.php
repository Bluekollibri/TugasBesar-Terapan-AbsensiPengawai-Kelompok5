<head>
    <link rel="stylesheet" href="{{ asset('css/formCSS.css') }}">
</head>

<div class="container">
    <h1>Edit Jabatan</h1>
    <form action="{{ route('jabatans.update', $jabatan->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="nama" id="nama-label">Nama Jabatan:</label>
            <input 
                type="text" 
                id="nama" 
                name="nama" 
                value="{{ old('nama', $jabatan->nama) }}" 
                placeholder="Masukkan nama jabatan" 
                required
            >
            @error('nama')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <button type="submit" id="submit" class="btn btn-primary">Perbarui</button>
        </div>
    </form>
</div>
