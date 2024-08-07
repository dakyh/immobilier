@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4">Ajouter un Bien</h1>
    <form action="{{ route('biens.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="reference" class="form-label">Référence</label>
            <input type="text" name="reference" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="intitule" class="form-label">Intitulé</label>
            <input type="text" name="intitule" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea name="description" class="form-control" rows="3" required></textarea>
        </div>
        <div class="mb-3">
            <label for="surface" class="form-label">Surface</label>
            <input type="number" name="surface" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="prix" class="form-label">Prix</label>
            <input type="number" name="prix" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="type" class="form-label">Type</label>
            <select name="type" class="form-select" required>
                @foreach($types as $type)
                    <option value="{{ $type->id }}">{{ $type->nom }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="adresse" class="form-label">Adresse</label>
            <input type="text" name="adresse" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="datePublication" class="form-label">Date de Publication</label>
            <input type="date" name="datePublication" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="etat" class="form-label">État</label>
            <input type="text" name="etat" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="nombreDePieces" class="form-label">Nombre de Pièces</label>
            <input type="number" name="nombreDePieces" class="form-control">
        </div>
        <div class="mb-3">
            <label for="nombreDeChambres" class="form-label">Nombre de Chambres</label>
            <input type="number" name="nombreDeChambres" class="form-control">
        </div>
        <div class="mb-3">
            <label for="nombreDeSallesDeBain" class="form-label">Nombre de Salles de Bain</label>
            <input type="number" name="nombreDeSallesDeBain" class="form-control">
        </div>
        <div class="mb-3">
            <label for="cloture" class="form-label">Clôture</label>
            <input type="checkbox" name="cloture" class="form-check-input">
        </div>
        <div class="mb-3">
            <label for="nombreDAppartements" class="form-label">Nombre d'Appartements</label>
            <input type="number" name="nombreDAppartements" class="form-control">
        </div>
        <div class="mb-3">
            <label for="file" class="form-label">Image</label>
            <input type="file" name="file" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Ajouter</button>
    </form>
</div>
@endsection
