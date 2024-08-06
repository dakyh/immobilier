@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Détails du Bien</h1>
    <div class="card">
        <div class="card-header">
            {{ $bien->intitule }}
        </div>
        <div class="card-body">
            <p><strong>Référence:</strong> {{ $bien->reference }}</p>
            <p><strong>Description:</strong> {{ $bien->description }}</p>
            <p><strong>Surface:</strong> {{ $bien->surface }} m²</p>
            <p><strong>Prix:</strong> {{ $bien->prix }} €</p>
            <p><strong>Adresse:</strong> {{ $bien->adresse }}</p>
            <p><strong>Date de Publication:</strong> {{ $bien->datePublication }}</p>
            <p><strong>État:</strong> {{ $bien->etat }}</p>
            <a href="{{ route('biens.edit', $bien->id) }}" class="btn btn-warning">Modifier</a>
            <form action="{{ route('biens.destroy', $bien->id) }}" method="POST" style="display:inline-block;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Supprimer</button>
            </form>
        </div>
    </div>
</div>
@endsection
