@extends('layouts.app')

@section('content')
<div class="container">
   <br>
   <br>
   <br>
    <h1 class="mb-4">Liste des Types de Biens</h1>
    <a href="{{ route('typebiens.create') }}" class="btn btn-primary mb-4">Ajouter un Type de Bien</a>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($typebiens as $typebien)
                <tr>
                    <td>{{ $typebien->id }}</td>
                    <td>{{ $typebien->name }}</td>
                    <td>
                        <a href="{{ route('typebiens.edit', $typebien->id) }}" class="btn btn-warning btn-sm">Modifier</a>
                        <form action="{{ route('typebiens.destroy', $typebien->id) }}" method="POST" style="display:inline-block;">
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
