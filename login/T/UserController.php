<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    // Display all users
    public function index()
    {
        $users = User::all(); // Get all users from the database
        return view('awal', ['users' => $users]);
        // return view('user.index', compact('users')); // Return the 'user.index' view with the users data
    }

    // Show form to create a new user
    public function create()
    {
        return view('user.create');
    }

    // Store new user
    public function store(Request $request)
{
    $request->validate([
        'username' => 'required|string|unique:users,username|max:255',
        'password' => 'required|string|min:6',
        'NamaKaryawan' => 'required|string|max:255',
    ]);

    // Hash password sebelum menyimpan
    User::create([
        'username' => $request->username,
        'password' => Hash::make($request->password), // Pastikan password di-hash
        'NamaKaryawan' => $request->NamaKaryawan,
    ]);

    return redirect()->route('users.index')->with('success', 'User berhasil ditambahkan.');
}


    // Show form to edit existing user
    public function edit(User $user)
    {
        return view('user.edit', compact('user'));
    }

    // Update user data
    public function update(Request $request, User $user)
{
    $request->validate([
        'username' => 'required|string|max:255|unique:users,username,' . $user->id,
        'password' => 'nullable|string|min:6', // Tidak wajib diubah
        'NamaKaryawan' => 'required|string|max:255',
    ]);

    // Hash password jika diubah, jika tidak maka biarkan password yang lama
    $user->update([
        'username' => $request->username,
        'NamaKaryawan' => $request->NamaKaryawan,
        'password' => $request->password ? Hash::make($request->password) : $user->password, // Hash jika ada perubahan password
    ]);

    return redirect()->route('users.index')->with('success', 'User berhasil diperbarui.');
}

    // Delete user data
    public function destroy(User $user)
    {
        $user->delete(); // Delete the user
        return redirect()->route('users.index')->with('success', 'User berhasil dihapus.');
    }
}
