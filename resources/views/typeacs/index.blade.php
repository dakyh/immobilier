@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Liste des Types d'Accompagnements</h1>
    <a href="{{ route('typeacs.create') }}" class="btn btn-primary mb-4">Ajouter un Type d'Accompagnement</a>

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
            @foreach($typeacs as $typeac)
                <tr>
                    <td>{{ $typeac->id }}</td>
                    <td>{{ $typeac->name }}</td>
                    <td>
                        <a href="{{ route('typeacs.edit', $typeac->id) }}" class="btn btn-warning btn-sm">Modifier</a>
                        <form action="{{ route('typeacs.destroy', $typeac->id) }}" method="POST" style="display:inline-block;">
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
