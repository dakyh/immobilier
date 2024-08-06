@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Ajouter un Accompagnement</h1>
    <form action="{{ route('accompagnements.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="intitule">Intitulé</label>
            <input type="text" name="intitule" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" class="form-control" required></textarea>
        </div>
        <div class="form-group">
            <label for="typeac_id">Type</label>
            <select name="typeac_id" class="form-control" required>
                @foreach($types as $type)
                    <option value="{{ $type->id }}">{{ $type->nom }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="datePublication">Date de Publication</label>
            <input type="date" name="datePublication" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Ajouter</button>
    </form>
</div>
@endsection
