<head>
    <link rel="stylesheet" href="{{ asset('css/formCSS.css') }}">
</head>

<div class="container">
    <h1>Edit Data Karyawan</h1>
    <form action="{{ route('data_karyawans.update', $dataKaryawan->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="form-group">
            <label for="nik">NIP:</label>
            <input 
                type="text" 
                name="nik" 
                id="nik" 
                value="{{ old('nik', $dataKaryawan->nik) }}" 
                placeholder="Masukkan NIP Karyawan" 
                required
            >
            @error('nik')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="name">Nama Karyawan:</label>
            <input 
                type="text" 
                name="name" 
                id="name" 
                value="{{ old('name', $dataKaryawan->name) }}" 
                placeholder="Masukkan Nama Karyawan" 
                required
            >
            @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="alamat">Alamat:</label>
            <input 
                type="text" 
                name="alamat" 
                id="alamat" 
                value="{{ old('alamat', $dataKaryawan->alamat) }}" 
                placeholder="Masukkan Alamat"
            >
            @error('alamat')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="jabatan">Jabatan:</label>
            <select name="jabatan_id" id="jabatan">
                <option value="">-- Pilih Jabatan --</option>
                @foreach ($jabatans as $jabatan)
                    <option value="{{ $jabatan->id }}" 
                        {{ old('jabatan_id', $dataKaryawan->jabatan_id) == $jabatan->id ? 'selected' : '' }}>
                        {{ $jabatan->nama }}
                    </option>
                @endforeach
            </select>
            @error('jabatan_id')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="departemen">Departemen:</label>
            <select name="departemen_id" id="departemen">
                <option value="">-- Pilih Departemen --</option>
                @foreach ($departemens as $departemen)
                    <option value="{{ $departemen->id }}" 
                        {{ old('departemen_id', $dataKaryawan->departemen_id) == $departemen->id ? 'selected' : '' }}>
                        {{ $departemen->name }}
                    </option>
                @endforeach
            </select>
            @error('departemen_id')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </form>
</div>
