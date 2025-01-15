<?php

namespace App\Http\Controllers;

use App\Models\Departemen;
use Illuminate\Http\Request;

class DepartemenController extends Controller
{
    public function index()
    {
        $Departemens = Departemen::all();
        return view('Departemens.index', compact('Departemens'));
    }

    public function create()
    {
        return view('Departemens.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'nullable',
        ]);

        // Hanya mengambil data yang diizinkan
        Departemen::create($request->only(['name', 'description']));

        return redirect()->route('departemens.index')->with('success', 'Departemen created successfully.');
    }

    public function edit(Departemen $departemen)
{
    return view('departemens.edit', compact('departemen'));  // Ensure the variable is in singular
}

public function update(Request $request, Departemen $departemen)
{
    $request->validate([
        'name' => 'required',
        'description' => 'nullable',
    ]);

    // Update the departemen
    $departemen->update($request->only(['name', 'description']));

    return redirect()->route('departemens.index')->with('success', 'Departemen updated successfully.');
}

    public function destroy(Departemen $Departemen)
    {
        $Departemen->delete();
        return redirect()->route('departemens.index')->with('success', 'Departemen deleted successfully.');
    }
}
