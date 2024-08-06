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
        <button type="submit" class="btn btn-primary">Mettre à jour</button>
    </form>
</div>
@endsection
