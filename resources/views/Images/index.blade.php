@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4">Liste des Images</h1>
    <a href="{{ route('images.create') }}" class="btn btn-primary mb-3">Ajouter une Image</a>
    <div class="table-responsive">
        <table class="table table-striped table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>URL</th>
                    <th>Bien</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($images as $image)
                    <tr>
                        <td>{{ $image->id }}</td>
                        <td>{{ $image->nom }}</td>
                        <td><a href="{{ asset('storage/' . $image->url) }}" target="_blank">Voir l'image</a></td>
                        <td>{{ $image->bien->intitule }}</td>
                        <td>
                            <a href="{{ route('images.show', $image->id) }}" class="btn btn-info btn-sm">Voir</a>
                            <a href="{{ route('images.edit', $image->id) }}" class="btn btn-warning btn-sm">Modifier</a>
                            <form action="{{ route('images.destroy', $image->id) }}" method="POST" style="display:inline-block;">
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
</div>
@endsection
