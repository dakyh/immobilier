@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Modifier un Accompagnement</h1>
    <form action="{{ route('accompagnements.update', $accompagnement->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="intitule">Intitulé</label>
            <input type="text" name="intitule" class="form-control" value="{{ $accompagnement->intitule }}" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" class="form-control" required>{{ $accompagnement->description }}</textarea>
        </div>
        <div class="form-group">
            <label for="type">Type</label>
            <select name="type" class="form-control" required>
                @foreach($types as $type)
                    <option value="{{ $type->id }}" {{ $accompagnement->typeac_id == $type->id ? 'selected' : '' }}>{{ $type->nom }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="datePublication">Date de Publication</label>
            <input type="date" name="datePublication" class="form-control" value="{{ $accompagnement->datePublication }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Mettre à jour</button>
    </form>
</div>
@endsection
