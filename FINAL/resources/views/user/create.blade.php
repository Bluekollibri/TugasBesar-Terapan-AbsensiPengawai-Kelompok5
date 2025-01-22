
<div class="container"> <link rel="stylesheet" href="{{ asset('css/formCSS.css') }}">
    <h1>{{ isset($user) ? 'Edit User' : 'Create User' }}</h1>
    <form action="{{ isset($user) ? route('users.update', $user->id) : route('users.store') }}" method="POST">
        @csrf
        @if(isset($user))
            @method('PUT')
        @endif

        <div class="form-group">
            <label for="NamaKaryawan" id="name-label">Nama Karyawan:</label>
            <input 
                type="text" 
                id="NamaKaryawan" 
                name="NamaKaryawan" 
                placeholder="Enter the employee's name" 
                value="{{ old('NamaKaryawan', $user->NamaKaryawan ?? '') }}" 
                required
            >
            @error('NamaKaryawan')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="username" id="username-label">Username:</label>
            <input 
                type="text" 
                id="username" 
                name="username" 
                placeholder="Enter the username" 
                value="{{ old('username', $user->username ?? '') }}" 
                required
            >
            @error('username')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="password" id="password-label">Password:</label>
            <input 
                type="password" 
                id="password" 
                name="password" 
                placeholder="Enter new password (if changing)"
            >
            @error('password')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <button type="submit" id="submit" class="btn btn-primary">{{ isset($user) ? 'Update' : 'Create' }}</button>
        </div>
    </form>
</div>
