@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Modifier un Bien</h1>
    <form action="{{ route('biens.update', $bien->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="reference">Référence</label>
            <input type="text" name="reference" class="form-control" value="{{ $bien->reference }}" required>
        </div>
        <div class="form-group">
            <label for="intitule">Intitulé</label>
            <input type="text" name="intitule" class="form-control" value="{{ $bien->intitule }}" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" class="form-control" required>{{ $bien->description }}</textarea>
        </div>
        <div class="form-group">
            <label for="surface">Surface</label>
            <input type="number" name="surface" class="form-control" value="{{ $bien->surface }}" required>
        </div>
        <div class="form-group">
            <label for="prix">Prix</label>
            <input type="number" name="prix" class="form-control" step="0.01" value="{{ $bien->prix }}" required>
        </div>
        <div class="form-group">
            <label for="adresse">Adresse</label>
            <input type="text" name="adresse" class="form-control" value="{{ $bien->adresse }}" required>
        </div>
        <div class="form-group">
            <label for="datePublication">Date de Publication</label>
            <input type="date" name="datePublication" class="form-control" value="{{ $bien->datePublication }}" required>
        </div>
        <div class="form-group">
            <label for="etat">État</label>
            <input type="text" name="etat" class="form-control" value="{{ $bien->etat }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Mettre à jour</button>
    </form>
</div>
@endsection
