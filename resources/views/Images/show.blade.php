@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Détails de l'Image</h1>
    <div class="card">
        <div class="card-header">
            {{ $image->nom }}
        </div>
        <div class="card-body">
            <p><strong>Nom:</strong> {{ $image->nom }}</p>
            <p><strong>URL:</strong> <a href="{{ $image->url }}" target="_blank">{{ $image->url }}</a></p>
            <p><strong>Bien:</strong> {{ $image->bien->intitule }}</p>
            <a href="{{ route('images.edit', $image->id) }}" class="btn btn-warning">Modifier</a>
            <form action="{{ route('images.destroy', $image->id) }}" method="POST" style="display:inline-block;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Supprimer</button>
            </form>
        </div>
    </div>
</div>
@endsection
