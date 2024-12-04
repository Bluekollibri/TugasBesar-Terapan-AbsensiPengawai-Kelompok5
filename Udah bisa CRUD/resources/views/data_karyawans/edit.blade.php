<h1>Edit Data Karyawan</h1>
<form action="{{ route('data_karyawans.update', $dataKaryawan->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div>
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" value="{{ old('name', $dataKaryawan->name) }}" required>
        @error('name')
            <div style="color: red;">{{ $message }}</div>
        @enderror
    </div>
    <br>
    <div>
        <label for="alamat">Alamat:</label>
        <input type="text" name="alamat" id="alamat" value="{{ old('alamat', $dataKaryawan->alamat) }}">
        @error('alamat')
            <div style="color: red;">{{ $message }}</div>
        @enderror
    </div>
    <br>
    <div>
        <label for="jabatan">Jabatan:</label>
        <select name="jabatan" id="jabatan">
            <option value="">-- Pilih Jabatan --</option>
            @foreach ($jabatans as $jabatan)
                <option value="{{ $jabatan->id }}" {{ old('jabatan', $dataKaryawan->jabatan) == $jabatan->id ? 'selected' : '' }}>
                    {{ $jabatan->nama }}
                </option>
            @endforeach
        </select>
        @error('jabatan')
            <div style="color: red;">{{ $message }}</div>
        @enderror
    </div>
    <br>
    <div>
        <label for="departemen">Departemen:</label>
        <select name="departemen" id="departemen">
            <option value="">-- Pilih Departemen --</option>
            @foreach ($items as $item)
                <option value="{{ $item->id }}" {{ old('departemen', $dataKaryawan->departemen) == $item->id ? 'selected' : '' }}>
                    {{ $item->name }}
                </option>
            @endforeach
        </select>
        @error('departemen')
            <div style="color: red;">{{ $message }}</div>
        @enderror
    </div>
    <br>
    <button type="submit">Update</button>
</form>
