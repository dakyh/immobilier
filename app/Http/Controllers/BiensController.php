<?php

namespace App\Http\Controllers;

use App\Models\Bien;
use App\Models\Image;
use App\Models\TypeBien;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BiensController extends Controller
{
    public function index()
    {
        $biens = Bien::all();
        $types = TypeBien::all(); // Récupère tous les types de biens
        return view('biens.index', compact('biens', 'types'));
    }


    public function create()
    {
        $types = TypeBien::all();
        return view('biens.create', compact('types'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'reference' => 'required|unique:biens',
            'intitule' => 'required',
            'description' => 'required',
            'surface' => 'required|integer',
            'prix' => 'required|numeric',
            'typebien_id' => 'required|exists:type_biens,id',
            'adresse' => 'required',
            'datePublication' => 'required|date',
            'etat' => 'required',
            'file' => 'required|image',
        ]);

        $bien = Bien::create($validatedData);

        $path = $request->file('file')->store('images', 'public');
        $url = Storage::url($path);

        Image::create([
            'nom' => $request->input('intitule'),
            'url' => $url,
            'bien_id' => $bien->id,
        ]);

        return redirect()->route('biens.index')->with('success', 'Bien ajouté avec succès');
    }

    public function show(Bien $bien)
    {
        return view('biens.show', compact('bien'));
    }

    public function edit(Bien $bien)
    {
        $types = TypeBien::all();
        return view('biens.edit', compact('bien', 'types'));
    }

    public function update(Request $request, Bien $bien)
    {
        $validatedData = $request->validate([
            'reference' => 'required|unique:biens,reference,' . $bien->id,
            'intitule' => 'required',
            'description' => 'required',
            'surface' => 'required|integer',
            'prix' => 'required|numeric',
            'typebien_id' => 'required|exists:type_biens,id',
            'adresse' => 'required',
            'datePublication' => 'required|date',
            'etat' => 'required',
            'file' => 'nullable|image',
        ]);

        $bien->update($validatedData);

        if ($request->hasFile('file')) {
            // Supprimer l'ancienne image
            if ($bien->image) {
                Storage::delete('public/' . str_replace('/storage/', '', $bien->image->url));
                $bien->image->delete();
            }

            $path = $request->file('file')->store('images', 'public');
            $url = Storage::url($path);

            Image::create([
                'nom' => $request->input('intitule'),
                'url' => $url,
                'bien_id' => $bien->id,
            ]);
        }

        return redirect()->route('biens.index')->with('success', 'Bien mis à jour avec succès');
    }

    public function destroy(Bien $bien)
    {
        // Supprimer l'image associée
        if ($bien->image) {
            Storage::delete('public/' . str_replace('/storage/', '', $bien->image->url));
            $bien->image->delete();
        }

        $bien->delete();

        return redirect()->route('biens.index')->with('success', 'Bien supprimé avec succès');
    }
}
