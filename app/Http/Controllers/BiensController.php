<?php

namespace App\Http\Controllers;

use App\Models\Bien;
use Illuminate\Http\Request;

class BiensController extends Controller
{
    public function index()
    {
        $biens = Bien::all();
        return view('biens.index', compact('biens'));
    }

    public function create()
    {
        return view('biens.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'reference' => 'required|unique:biens',
            'intitule' => 'required',
            'description' => 'required',
            'surface' => 'required|integer',
            'prix' => 'required|numeric',
            'type' => 'required',
            'adresse' => 'required',
            'datePublication' => 'required|date',
            'etat' => 'required',
        ]);

        Bien::create($validatedData);

        return redirect()->route('biens.index')->with('success', 'Bien ajouté avec succès');
    }

    public function show(Bien $bien)
    {
        return view('biens.show', compact('bien'));
    }

    public function edit(Bien $bien)
    {
        return view('biens.edit', compact('bien'));
    }

    public function update(Request $request, Bien $bien)
    {
        $validatedData = $request->validate([
            'reference' => 'required|unique:biens,reference,' . $bien->id,
            'intitule' => 'required',
            'description' => 'required',
            'surface' => 'required|integer',
            'prix' => 'required|numeric',
            'type' => 'required',
            'adresse' => 'required',
            'datePublication' => 'required|date',
            'etat' => 'required',
        ]);

        $bien->update($validatedData);

        return redirect()->route('biens.index')->with('success', 'Bien mis à jour avec succès');
    }

    public function destroy(Bien $bien)
    {
        $bien->delete();

        return redirect()->route('biens.index')->with('success', 'Bien supprimé avec succès');
    }
}
