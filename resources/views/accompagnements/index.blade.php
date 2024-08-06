@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Liste des Accompagnements</h1>
    <a href="{{ route('accompagnements.create') }}" class="btn btn-primary">Ajouter un Accompagnement</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Intitulé</th>
                <th>Description</th>
                <th>Type</th>
                <th>Date de Publication</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($accompagnements as $accompagnement)
                <tr>
                    <td>{{ $accompagnement->id }}</td>
                    <td>{{ $accompagnement->intitule }}</td>
                    <td>{{ $accompagnement->description }}</td>
                    <td>{{ $accompagnement->typeac->nom }}</td>
                    <td>{{ $accompagnement->datePublication }}</td>
                    <td>
                        <a href="{{ route('accompagnements.show', $accompagnement->id) }}" class="btn btn-info">Voir</a>
                        <a href="{{ route('accompagnements.edit', $accompagnement->id) }}" class="btn btn-warning">Modifier</a>
                        <form action="{{ route('accompagnements.destroy', $accompagnement->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
