@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <br>
    <br>
    <h1 class="mb-4">Ajouter un Accompagnement</h1>
    <form action="{{ route('accompagnements.store') }}" method="POST">
        @csrf
        <div class="form-group mb-3">
            <label for="intitule" class="form-label">Intitulé</label>
            <input type="text" name="intitule" class="form-control" required>
        </div>
        <div class="form-group mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea name="description" class="form-control" required></textarea>
        </div>
        <div class="form-group mb-3">
            <label for="type" class="form-label">Type</label>
            <select name="type" class="form-select" required>
                @foreach($types as $type)
                    <option value="{{ $type->id }}">{{ $type->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group mb-3">
            <label for="datePublication" class="form-label">Date de Publication</label>
            <input type="date" name="datePublication" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Ajouter</button>
    </form>
</div>
@endsection
