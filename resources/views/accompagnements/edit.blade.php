@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <br>
    <br>
    <h1 class="mb-4">Modifier un Accompagnement</h1>
    <form action="{{ route('accompagnements.update', $accompagnement->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group mb-3">
            <label for="intitule" class="form-label">Intitulé</label>
            <input type="text" name="intitule" class="form-control" value="{{ $accompagnement->intitule }}" required>
        </div>
        <div class="form-group mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea name="description" class="form-control" rows="4" required>{{ $accompagnement->description }}</textarea>
        </div>
        <div class="form-group mb-3">
            <label for="type" class="form-label">Type</label>
            <select name="type" class="form-select" required>
                @foreach($types as $type)
                    <option value="{{ $type->name }}" {{ $accompagnement->typeac_id == $type->name ? 'selected' : '' }}>{{ $type->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group mb-3">
            <label for="datePublication" class="form-label">Date de Publication</label>
            <input type="date" name="datePublication" class="form-control" value="{{ $accompagnement->datePublication }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Mettre à jour</button>
    </form>
</div>
@endsection
