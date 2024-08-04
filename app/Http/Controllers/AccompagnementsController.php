<?php

namespace App\Http\Controllers;

use App\Models\Accompagnement;
use Illuminate\Http\Request;

class AccompagnementsController extends Controller
{
    public function index()
    {
        $accompagnements = Accompagnement::all();
        return view('accompagnements.index', compact('accompagnements'));
    }

    public function create()
    {
        return view('accompagnements.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'intitule' => 'required',
            'description' => 'required',
            'type' => 'required',
            'datePublication' => 'required|date',
        ]);

        Accompagnement::create($validatedData);

        return redirect()->route('accompagnements.index')->with('success', 'Accompagnement ajouté avec succès');
    }

    public function show(Accompagnement $accompagnement)
    {
        return view('accompagnements.show', compact('accompagnement'));
    }

    public function edit(Accompagnement $accompagnement)
    {
        return view('accompagnements.edit', compact('accompagnement'));
    }

    public function update(Request $request, Accompagnement $accompagnement)
    {
        $validatedData = $request->validate([
            'intitule' => 'required',
            'description' => 'required',
            'type' => 'required',
            'datePublication' => 'required|date',
        ]);

        $accompagnement->update($validatedData);

        return redirect()->route('accompagnements.index')->with('success', 'Accompagnement mis à jour avec succès');
    }

    public function destroy(Accompagnement $accompagnement)
    {
        $accompagnement->delete();

        return redirect()->route('accompagnements.index')->with('success', 'Accompagnement supprimé avec succès');
    }
}
