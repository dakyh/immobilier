@extends('layouts.app')

@section('content')
<div class="container">
    <br>
    <br>
    <br>
    <h1>Liste des Images</h1>
    <a href="{{ route('images.create') }}" class="btn btn-primary">Ajouter une Image</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
             
                <th>Bien</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($images as $image)
                <tr>
                    <td>{{ $image->id }}</td>
                    <td>{{ $image->nom }}</td>
                
                    <td>{{ $image->bien->intitule }}</td>
                    <td>
                        <a href="{{ route('images.show', $image->id) }}" class="btn btn-info">Voir</a>
                        <a href="{{ route('images.edit', $image->id) }}" class="btn btn-warning">Modifier</a>
                        <form action="{{ route('images.destroy', $image->id) }}" method="POST" style="display:inline-block;">
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
