<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // Show login form
    public function showLoginForm()
    {
        return view('login');
    }

    // Handle login request
    public function login(Request $request)
    {
        // Validate the login data
        $credentials = $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        // Try to authenticate using username and password
        $user = User::where('username', $credentials['username'])->first();

        // Check if the user exists and validate the password using Bcrypt
        if ($user && Hash::check($credentials['password'], $user->password)) {
            Auth::login($user); // Log the user in
            return redirect()->route('awal'); // Redirect to the home page after successful login
        }

        // Authentication failed
        return back()->withErrors([
            'username' => 'The provided credentials do not match our records.',
        ]);
    }

    // Handle logout request
    public function logout()
    {
        Auth::logout(); // Log the user out
        return redirect()->route('login'); // Redirect to the login page
    }
}