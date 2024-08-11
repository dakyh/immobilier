<?php

namespace App\Http\Controllers;

use App\Models\Bien;
use App\Models\Image;
use App\Models\TypeBien;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Storage;

class BiensController extends Controller
{
        public function index(Request $request)
    {
        $selectedType = $request->input('types', 'all');

        // Filter biens based on the selected type
        $biens = Bien::when($selectedType != 'all', function ($query) use ($selectedType) {
            $query->where('type', $selectedType);
        })->get();

        // No need to fetch types from another table
        $types = Bien::select('type')->distinct()->get();

        return view('biens.index', compact('biens', 'types', 'selectedType'));
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
            'type' => 'required|exists:typebiens,id',
            'adresse' => 'required',
            'datePublication' => 'required|date',
            'etat' => 'required',
            'nombreDePieces' => 'nullable|integer',
            'nombreDeChambres' => 'nullable|integer',
            'nombreDeSallesDeBain' => 'nullable|integer',
            'cloture' => 'nullable|boolean',
            'nombreDAppartements' => 'nullable|integer',
            'files.*' => 'required|image', // Change to files.* for multiple images
        ]);

        $bien = Bien::create($validatedData);

        if ($request->hasFile('files')) {
            foreach ($request->file('files') as $file) {
                $path = $file->store('images', 'public');
                $url = Storage::url($path);

                Image::create([
                    'nom' => $request->input('intitule'),
                    'url' => $url,
                    'bien_id' => $bien->id,
                ]);
            }
        }

        return redirect()->route('biens.index')->with('success', 'Bien ajouté avec succès');
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
            'type' => 'required|exists:typebiens,id',
            'adresse' => 'required',
            'datePublication' => 'required|date',
            'etat' => 'required',
            'nombreDePieces' => 'nullable|integer',
            'nombreDeChambres' => 'nullable|integer',
            'nombreDeSallesDeBain' => 'nullable|integer',
            'cloture' => 'nullable|boolean',
            'nombreDAppartements' => 'nullable|integer',
            'files.*' => 'nullable|image', // Change to files.* for multiple images
        ]);

        $bien->update($validatedData);

        if ($request->hasFile('files')) {
            // Supprimer les anciennes images
            foreach ($bien->images as $image) {
                Storage::delete('public/' . str_replace('/storage/', '', $image->url));
                $image->delete();
            }

            foreach ($request->file('files') as $file) {
                $path = $file->store('images', 'public');
                $url = Storage::url($path);

                Image::create([
                    'nom' => $request->input('intitule'),
                    'url' => $url,
                    'bien_id' => $bien->id,
                ]);
            }
        }

        return redirect()->route('biens.index')->with('success', 'Bien mis à jour avec succès');
    }

    public function show(Bien $bien)
    {
        return view('biens.show', compact('bien'));
    }

    public function destroy(Bien $bien)
    {
        // Supprimer les images associées
        foreach ($bien->images as $image) {
            Storage::delete('public/' . str_replace('/storage/', '', $image->url));
            $image->delete();
        }

        $bien->delete();

        return redirect()->route('biens.index')->with('success', 'Bien supprimé avec succès');
    }
}
