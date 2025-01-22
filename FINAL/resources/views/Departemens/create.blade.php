<head>
    <link rel="stylesheet" href="{{ asset('css/formCSS.css') }}">
</head>

<div class="container">
    <h1>{{ isset($departemen) ? 'Edit Departemen' : 'Create Departemen' }}</h1>
    <form action="{{ isset($departemen) ? route('departemens.update', $departemen->id) : route('departemens.store') }}" method="POST">
        @csrf
        @if(isset($departemen))
            @method('PUT')
        @endif

        <div class="form-group">
            <label for="name" id="name-label">Nama Departemen:</label>
            <input 
                type="text" 
                id="name" 
                name="name" 
                value="{{ old('name', $departemen->name ?? '') }}" 
                placeholder="Masukkan nama departemen" 
                required
            >
            @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <button type="submit" id="submit" class="btn btn-primary">{{ isset($departemen) ? 'Update' : 'Create' }}</button>
        </div>
    </form>
</div>
