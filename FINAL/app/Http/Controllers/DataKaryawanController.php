<?php

namespace App\Http\Controllers;

use App\Models\DataKaryawan;
use App\Models\Departemen;
use Illuminate\Http\Request;

use App\Models\Jabatan;


class DataKaryawanController extends Controller
{
    public function index()
{
    $data_karyawans = DataKaryawan::with(['jabatan', 'departemen'])->get();

    return view('data_karyawans.index', compact('data_karyawans'));
}


    public function create()
    {
        $jabatans = Jabatan::all(); // Mengambil semua data dari tabel jabatans
        $departemens = Departemen::all(); // Mengambil semua data dari tabel items
    
        return view('data_karyawans.create', compact('jabatans', 'departemens'));
    }

    public function store(Request $request)
{
    $request->validate([
        'nik' => 'required',
        'name' => 'nullable',
        'alamat' => 'nullable',
        'jabatan_id' => 'required',
        'departemen_id' => 'required',
    ]);

    // Hanya mengambil data yang diizinkan
    DataKaryawan::create($request->only(['nik', 'name', 'alamat', 'jabatan_id', 'departemen_id']));


    return redirect()->route('data_karyawans.index')->with('success', 'DataKaryawan created successfully.');
}

public function edit(DataKaryawan $dataKaryawan)
{
    $jabatans = Jabatan::all();
    $departemens = Departemen::all();
    return view('data_karyawans.edit', compact('dataKaryawan', 'jabatans', 'departemens'));
}

public function update(Request $request, DataKaryawan $dataKaryawan)
{
    // Validate the incoming data
    $request->validate([
        'nik' => 'required',
        'name' => 'nullable',
        'alamat' => 'nullable',
        'jabatan_id' => 'required',
        'departemen_id' => 'required',
    ]);

    // Update the existing record
    $dataKaryawan->update($request->only(['nik', 'name', 'alamat', 'jabatan_id', 'departemen_id']));

    // Redirect to the index page with success message
    return redirect()->route('data_karyawans.index')->with('success', 'Data Karyawan updated successfully.');
}

public function destroy(DataKaryawan $dataKaryawan)
{
    $dataKaryawan->delete();

    return redirect()->route('data_karyawans.index')->with('success', 'Data Karyawan deleted successfully.');
}
}
