@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4">Modifier un Bien</h1>
    <form action="{{ route('biens.update', $bien->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="reference" class="form-label">Référence</label>
            <input type="text" name="reference" class="form-control" value="{{ $bien->reference }}" required>
        </div>
        <div class="mb-3">
            <label for="intitule" class="form-label">Intitulé</label>
            <input type="text" name="intitule" class="form-control" value="{{ $bien->intitule }}" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea name="description" class="form-control" rows="3" required>{{ $bien->description }}</textarea>
        </div>
        <div class="mb-3">
            <label for="surface" class="form-label">Surface</label>
            <input type="number" name="surface" class="form-control" value="{{ $bien->surface }}" required>
        </div>
        <div class="mb-3">
            <label for="prix" class="form-label">Prix</label>
            <input type="number" name="prix" class="form-control" step="0.01" value="{{ $bien->prix }}" required>
        </div>
        <div class="form-group">
            <label for="type" class="form-label">Type</label>
            <select name="type" class="form-select" required>
                @foreach($types as $type)
                    <option value="{{ $type->id }}" {{ $bien->type == $type->id ? 'selected' : '' }}>
                        {{ $type->name }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="adresse" class="form-label">Adresse</label>
            <input type="text" name="adresse" class="form-control" value="{{ $bien->adresse }}" required>
        </div>
        <div class="mb-3">
            <label for="datePublication" class="form-label">Date de Publication</label>
            <input type="date" name="datePublication" class="form-control" value="{{ $bien->datePublication }}" required>
        </div>
        <div class="mb-3">
            <label for="etat" class="form-label">État</label>
            <input type="text" name="etat" class="form-control" value="{{ $bien->etat }}" required>
        </div>
        <div class="mb-3">
            <label for="nombreDePieces" class="form-label">Nombre de Pièces</label>
            <input type="number" name="nombreDePieces" class="form-control" value="{{ $bien->nombreDePieces }}">
        </div>
        <div class="mb-3">
            <label for="nombreDeChambres" class="form-label">Nombre de Chambres</label>
            <input type="number" name="nombreDeChambres" class="form-control" value="{{ $bien->nombreDeChambres }}">
        </div>
        <div class="mb-3">
            <label for="nombreDeSallesDeBain" class="form-label">Nombre de Salles de Bain</label>
            <input type="number" name="nombreDeSallesDeBain" class="form-control" value="{{ $bien->nombreDeSallesDeBain }}">
        </div>
        <div class="mb-3">
            <label for="cloture" class="form-label">Clôture</label>
            <input type="checkbox" name="cloture" class="form-check-input" {{ $bien->cloture ? 'checked' : '' }}>
        </div>
        <div class="mb-3">
            <label for="nombreDAppartements" class="form-label">Nombre d'Appartements</label>
            <input type="number" name="nombreDAppartements" class="form-control" value="{{ $bien->nombreDAppartements }}">
        </div>
        <div class="mb-3">
            <label for="files" class="form-label">Images</label>
            <input type="file" name="files[]" class="form-control" multiple>
            <p class="mt-2">Images actuelles :</p>
            <div class="d-flex flex-wrap">
                @foreach($bien->images as $image)
                    <div class="me-2 mb-2">
                        <img src="{{ asset($image->url) }}" alt="{{ $image->nom }}" class="img-thumbnail" width="100">
                    </div>
                @endforeach
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Mettre à jour</button>
    </form>
</div>
@endsection
