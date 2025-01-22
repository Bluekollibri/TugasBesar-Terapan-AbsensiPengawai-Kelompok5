<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AwalController extends Controller
{
    public function index() 
{
    // Pastikan pengguna sudah login
    if (Auth::check()) {
        $user = Auth::user(); // Ambil data user yang sedang login
        
        // Cek apakah NamaKaryawan ada pada user
        if ($user->NamaKaryawan) {
            return view('awal.index', ['NamaKaryawan' => $user->NamaKaryawan]);
        } else {
            // Tampilkan pesan jika NamaKaryawan tidak ditemukan
            return redirect()->route('awal')->withErrors('Nama Karyawan tidak ditemukan.');
        }
    }

    // Redirect ke login jika pengguna belum login
    return redirect()->route('login');
}

}


