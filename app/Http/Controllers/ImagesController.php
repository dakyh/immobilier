<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Bien;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImagesController extends Controller
{
    public function index()
    {
        $images = Image::all();
        return view('images.index', compact('images'));
    }

    public function create()
    {
        $biens = Bien::all();
        return view('images.create', compact('biens'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nom' => 'required',
            'file' => 'required|image',
            'bien_id' => 'required|exists:biens,id',
        ]);

        $path = $request->file('file')->store('images', 'public');
        $url = Storage::url($path);

        Image::create([
            'nom' => $request->input('nom'),
            'url' => $url,
            'bien_id' => $request->input('bien_id'),
        ]);

        return redirect()->route('images.index')->with('success', 'Image ajoutée avec succès');
    }

    public function show(Image $image)
    {
        return view('images.show', compact('image'));
    }

    public function edit(Image $image)
    {
        $biens = Bien::all();
        return view('images.edit', compact('image', 'biens'));
    }

    public function update(Request $request, Image $image)
    {
        $validatedData = $request->validate([
            'nom' => 'required',
            'file' => 'nullable|image',
            'bien_id' => 'required|exists:biens,id',
        ]);

        if ($request->hasFile('file')) {
            // Supprimer l'ancienne image
            if ($image->url) {
                Storage::delete('public/' . str_replace('/storage/', '', $image->url));
            }

            $path = $request->file('file')->store('images', 'public');
            $url = Storage::url($path);
            $image->url = $url;
        }

        $image->nom = $request->input('nom');
        $image->bien_id = $request->input('bien_id');
        $image->save();

        return redirect()->route('images.index')->with('success', 'Image mise à jour avec succès');
    }

    public function destroy(Image $image)
    {
        // Supprimer l'image du stockage
        if ($image->url) {
            Storage::delete('public/' . str_replace('/storage/', '', $image->url));
        }

        $image->delete();

        return redirect()->route('images.index')->with('success', 'Image supprimée avec succès');
    }
}
