@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Détails de l'Accompagnement</h1>
    <div class="card">
        <div class="card-header">
            {{ $accompagnement->intitule }}
        </div>
        <div class="card-body">
            <p><strong>Intitulé:</strong> {{ $accompagnement->intitule }}</p>
            <p><strong>Description:</strong> {{ $accompagnement->description }}</p>
            <p><strong>Type:</strong> {{ $accompagnement->typeac->nom }}</p>
            <p><strong>Date de Publication:</strong> {{ $accompagnement->datePublication }}</p>
            <a href="{{ route('accompagnements.edit', $accompagnement->id) }}" class="btn btn-warning">Modifier</a>
            <form action="{{ route('accompagnements.destroy', $accompagnement->id) }}" method="POST" style="display:inline-block;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Supprimer</button>
            </form>
        </div>
    </div>
</div>
@endsection
