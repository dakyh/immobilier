<?php

namespace App\Http\Controllers;

use App\Models\TypeAC;
use Illuminate\Http\Request;

class TypeACController extends Controller
{
    public function index()
    {
        $typeacs = TypeAC::all();
        return view('typeacs.index', compact('typeacs'));
    }

    public function create()
    {
        return view('typeacs.form');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        TypeAC::create($validatedData);

        return redirect()->route('typeacs.index')->with('success', 'TypeAC ajouté avec succès.');
    }

    public function edit(TypeAC $typeac)
    {
        return view('typeacs.form', compact('typeac'));
    }

    public function update(Request $request, TypeAC $typeac)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $typeac->update($validatedData);

        return redirect()->route('typeacs.index')->with('success', 'TypeAC mis à jour avec succès.');
    }

    public function destroy(TypeAC $typeac)
    {
        $typeac->delete();
        return redirect()->route('typeacs.index')->with('success', 'TypeAC supprimé avec succès.');
    }
}
