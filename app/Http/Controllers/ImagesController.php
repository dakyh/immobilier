<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;

class ImagesController extends Controller
{
    public function index()
    {
        $images = Image::all();
        return view('images.index', compact('images'));
    }

    public function create()
    {
        return view('images.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nom' => 'required',
            'url' => 'required|url',
            'bien_id' => 'required|exists:biens,id',
        ]);

        Image::create($validatedData);

        return redirect()->route('images.index')->with('success', 'Image ajoutée avec succès');
    }

    public function show(Image $image)
    {
        return view('images.show', compact('image'));
    }

    public function edit(Image $image)
    {
        return view('images.edit', compact('image'));
    }

    public function update(Request $request, Image $image)
    {
        $validatedData = $request->validate([
            'nom' => 'required',
            'url' => 'required|url',
            'bien_id' => 'required|exists:biens,id',
        ]);

        $image->update($validatedData);

        return redirect()->route('images.index')->with('success', 'Image mise à jour avec succès');
    }

    public function destroy(Image $image)
    {
        $image->delete();

        return redirect()->route('images.index')->with('success', 'Image supprimée avec succès');
    }
}
