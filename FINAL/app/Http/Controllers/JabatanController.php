<?php

namespace App\Http\Controllers;

use App\Models\Jabatan;
use Illuminate\Http\Request;

class JabatanController extends Controller
{
    public function index()
    {
        $jabatans = Jabatan::all();
        return view('jabatans.index', compact('jabatans'));
    }

    public function create()
    {
        return view('jabatans.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'level' => 'nullable',
        ]);

        Jabatan::create($request->only(['nama', 'level']));
        return redirect()->route('jabatans.index')->with('success', 'Jabatan berhasil dibuat.');
    }

    public function edit(Jabatan $jabatan)
    {
        return view('jabatans.edit', compact('jabatan'));
    }

    public function update(Request $request, Jabatan $jabatan)
    {
        $request->validate([
            'nama' => 'required',
            'level' => 'nullable',
        ]);

        $jabatan->update($request->only(['nama', 'level']));
        return redirect()->route('jabatans.index')->with('success', 'Jabatan berhasil diperbarui.');
    }

    public function destroy(Jabatan $jabatan)
    {
        $jabatan->delete();
        return redirect()->route('jabatans.index')->with('success', 'Jabatan berhasil dihapus.');
    }
}
