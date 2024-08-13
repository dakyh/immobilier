@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <br>
    <br>
    <h1 class="mb-4">Gestion des Biens</h1>
    
    <!-- Search Form -->
    <form action="{{ route('biens.gestion') }}" method="GET" class="mb-4">
        <div class="input-group">
            <input type="text" name="search" class="form-control" placeholder="Rechercher par référence" value="{{ request()->get('search') }}">
            <button class="btn btn-primary" type="submit">Rechercher</button>
        </div>
    </form>
    
    <a href="{{ route('biens.create') }}" class="btn btn-primary mb-4">Ajouter un Bien</a>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Référence</th>
                <th>Intitulé</th>
                <th>Type</th>
                <th>Surface</th>
                <th>Prix</th>
                <th>Adresse</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($biens as $bien)
                <tr>
                    <td>{{ $bien->id }}</td>
                    <td>{{ $bien->reference }}</td>
                    <td>{{ $bien->intitule }}</td>
                    <td>{{ $bien->type }}</td>
                    <td>{{ $bien->surface }} m²</td>
                    <td>{{ $bien->prix }} €</td>
                    <td>{{ $bien->adresse }}</td>
                    <td>
                        <a href="{{ route('biens.show', $bien->id) }}" class="btn btn-info btn-sm">Voir</a>
                        <a href="{{ route('biens.edit', $bien->id) }}" class="btn btn-warning btn-sm">Modifier</a>
                        <form action="{{ route('biens.destroy', $bien->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
