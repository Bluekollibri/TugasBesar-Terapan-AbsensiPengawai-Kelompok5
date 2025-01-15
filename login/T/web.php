<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\DataKaryawanController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DepartemenController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AwalController;

Route::get('/awal', [AwalController::class, 'index'])->name('awal');

    
// Rute untuk menampilkan form login
Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');

// Rute untuk proses login (POST)
Route::post('login', [AuthController::class, 'login']);

// Rute untuk logout (POST)
Route::post('logout', [AuthController::class, 'logout'])->name('logout');

// Rute untuk resource controller
Route::resource('departemens', DepartemenController::class);
Route::resource('users', UserController::class);
Route::resource('jabatans', JabatanController::class);
Route::resource('data_karyawans', DataKaryawanController::class);

// Rute tambahan untuk halaman lainnya
Route::get('/admin2', function () {
    return view('admin2');
});



// routes/web.php
Route::get('/awal', function () {
    return view('awal'); // Pastikan ada view 'awal.blade.php'
})->name('awal');



Route::get('/', function () {
    return view('index');
});






