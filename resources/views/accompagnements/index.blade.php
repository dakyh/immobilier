@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4">Liste des Accompagnements</h1>
    <a href="{{ route('accompagnements.create') }}" class="btn btn-primary mb-3">Ajouter un Accompagnement</a>
    <table class="table table-bordered table-striped">
        <thead class="table-dark">
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
                    <td>{{ $accompagnement->type }}</td>
                    <td>{{ $accompagnement->datePublication->format('d-m-Y') }}</td>
                    <td>
                        <a href="{{ route('accompagnements.show', $accompagnement->id) }}" class="btn btn-info btn-sm">Voir</a>
                        <a href="{{ route('accompagnements.edit', $accompagnement->id) }}" class="btn btn-warning btn-sm">Modifier</a>
                        <form action="{{ route('accompagnements.destroy', $accompagnement->id) }}" method="POST" style="display:inline-block;">
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
