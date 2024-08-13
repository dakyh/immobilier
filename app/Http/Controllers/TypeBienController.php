<?php

namespace App\Http\Controllers;

use App\Models\TypeBien;
use Illuminate\Http\Request;

class TypeBienController extends Controller
{
    public function index()
    {
        $typebiens = TypeBien::all();
        return view('typebiens.index', compact('typebiens'));
    }

    public function create()
    {
        return view('typebiens.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        TypeBien::create($request->all());

        return redirect()->route('typebiens.index')->with('success', 'Type de Bien ajouté avec succès');
    }

    public function edit(TypeBien $typebien)
    {
        return view('typebiens.edit', compact('typebien'));
    }

    public function update(Request $request, TypeBien $typebien)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $typebien->update($request->all());

        return redirect()->route('typebiens.index')->with('success', 'Type de Bien mis à jour avec succès');
    }

    public function destroy(TypeBien $typebien)
    {
        $typebien->delete();
        return redirect()->route('typebiens.index')->with('success', 'Type de Bien supprimé avec succès');
    }
}
