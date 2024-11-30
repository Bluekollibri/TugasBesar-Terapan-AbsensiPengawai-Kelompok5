<?php

use Illuminate\Support\Facades\Route;

Route::get('/admin2', function () {
    return view('admin2');
});

Route::get('/datajabatan', function () {
    return view('datajabatan');
});

Route::get('/datakaryawan', function () {
    return view('datakaryawan');
});

Route::get('/datadepartemen', function () {
    return view('datadepartemen');
});

Route::get('/dataabsen', function () {
    return view('dataabsen');
});

Route::get('/dataketerangan', function () {
    return view('dataketerangan');
});