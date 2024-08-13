@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <br>
    <br>
    <h1 class="mb-4">Détails de l'Accompagnement</h1>
    <div class="card">
        <div class="card-header bg-primary text-white">
            {{ $accompagnement->intitule }}
        </div>
        <div class="card-body">
            <p><strong>Intitulé:</strong> {{ $accompagnement->intitule }}</p>
            <p><strong>Description:</strong> {{ $accompagnement->description }}</p>
            <p><strong>Type:</strong> {{ $accompagnement->typeac->nom }}</p>
            <p><strong>Date de Publication:</strong> {{ $accompagnement->datePublication }}</p>
            <a href="{{ route('accompagnements.edit', $accompagnement->id) }}" class="btn btn-warning me-2">Modifier</a>
            <form action="{{ route('accompagnements.destroy', $accompagnement->id) }}" method="POST" style="display:inline-block;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Supprimer</button>
            </form>
        </div>
    </div>
</div>
@endsection
